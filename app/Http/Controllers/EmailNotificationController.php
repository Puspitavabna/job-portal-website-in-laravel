<?php

namespace App\Http\Controllers;

use App\Models\EmailNotification;
use App\Models\RoleType;
use App\Models\Category;
use App\Models\User;
use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

use Illuminate\Support\Facades\Session;

class EmailNotificationController extends Controller
{
   public function index(){
   $user = Auth::user();
   $email_notification = EmailNotification::where('user_id', $user->id)->first();
   $category_choice = data_get($email_notification,'category_choice',[]);
    $category_list = [];

       if(empty($category_choice)){
           $category_choice = unserialize($category_choice);
           $category_list = Category::whereIn('id',$category_choice)->get();
       }else{
           return view('email_notification.index', ['email_notification' => $email_notification,
            'category_list' => $category_list, 'user' => $user]);
    }

   }
    public function store(Request $request){
        $user = Auth::user();
        $email_notification = EmailNotification::where('user_id',$user->id)->first();
        if(is_null($email_notification)){
            $email_notification = new EmailNotification();
            if(isset($request->send_interval_email)){
                $email_notification->send_interval_email = $request->send_interval_email;
            }else {
                $email_notification->send_interval_email = 7;
            }
        }else{
            if(isset($request->send_interval_email)){
                $email_notification->send_interval_email = $request->send_interval_email;
            }
        }
        if($user->role_type_id == 2){
            $category_choice = serialize($request->category);
            $email_notification->category_choice = $category_choice;
            $email_notification->subscribe_email = $request->subscribe_email;
            $email_notification->subscribe_push = $request->subscribe_push;
            $email_notification->subscribe_job_offer = $request->subscribe_job_offer;
        }else {
            $email_notification->subcriber_job_applicant = $request->subcriber_job_applicant;
            $email_notification->subcriber_job_offer_accept = $request->subcriber_job_offer_accept;

        }
        $email_notification->subscribe_message = $request->subscribe_message;
        $email_notification->user_id = $user->id;
        $email_notification->save();
        $flash_message = 'Email notification has been updated successfully';
        Session::Flash('success', $flash_message);
        return redirect()->route('email_notification.index');

    }
    public function editSettings(){
        $user = Auth::user();
        $email_notification = EmailNotification::where('user_id',$user->id)->first();
        if(empty($email_notification)){
            $selected_category = [];
            $subscribe_email = true;
            $subscribe_push = true;
            $email_last_send = null;
            $subscribe_job_offer = true;
            $subscribe_message = true;
            $subscribe_job_applicant = true;
            $subscribe_job_offer_accept = true;

        } else {
            $selected_category = unserialize($email_notification->category_choice);
            $subscribe_email = $email_notification->subscribe_email;
            $subscribe_push =$email_notification->subscribe_push;
            $email_last_send = $email_notification->email_last_send;
            $subscribe_job_offer = $email_notification->subscribe_job_offer;
            $subscribe_message = $email_notification->subscribe_message;
            $subscribe_job_applicant = $email_notification->subscribe_job_applicant;;
            $subscribe_job_offer_accept = $email_notification->subscribe_job_offer_accept;;
        }
            $category_list = Category::all();
        $send_interval_list = config('constants.send_interval_email');//config ফোল্ডারের মধ্যে constants নামে একটা ফাইল আছে ,ঐখানে send_interval_email এর জন্য মান নির্ধারন করা আছে
        return view('email_notification.edit',compact('email_notification','user','category_list','selected_category','send_interval_list'));

    }
    public function update(Request $request){

    }
}
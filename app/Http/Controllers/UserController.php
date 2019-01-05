<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Category;
use App\Models\User;
use App\Models\EducationType;
use App\Models\Education;
use Illuminate\Validation\Rule;
use Validator;
use App\Models\RoleType;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function beforeGetRegister(){
        $role_types = RoleType::all();
        return view('users.before_register', ['role_types' => $role_types]);
    }

    public function getRegister($name){
        $role_type= RoleType::where('name',$name)->first();
        return view('users.sign_up',['role_type'=>$role_type]);
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'role_type_id' => 'required|integer',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|required_with:password',

        ]);
        if($validator->fails()){
            $validation_array = $validator->errors()->toArray();
            $validation_message = '';
            if(isset($validation_array['role_type_id'][0])){
                $validation_message= $validation_message.$validation_array['role_type_id'][0].PHP_EOL;
            }
            if(isset($validation_array['email'][0])){
                $validation_message= $validation_message.$validation_array['email'][0].PHP_EOL;
            }
            if(isset($validation_array['password'][0])){
                $validation_message= $validation_message.$validation_array['password'][0].PHP_EOL;
            }
            if(isset($validation_array['password_confirmation'][0])){
                $validation_message= $validation_message.$validation_array['password_confirmation'][0].PHP_EOL;
            }

            $flash_message = $validation_message;
            $flash_status = 'error';
            $data_status = false;
            Session::flash('success', $flash_message);
            return redirect()->back();
        }else {
            $user = new User();
            $user->role_type_id = $request->role_type_id;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->business_name = null;

            if ($request->first_name && $request->last_name) {
                $user_name = strtolower(str_replace(' ', '_', $request->first_name . '_' . $request->last_name));
            }
            $user_check = User::where('user_name', $user_name)->first();
            if (!empty($user_check)) {
                $user_name = $user_name . rand(1, 100);
            }
            $user->user_name = $user_name;
            $user->current_city = $request->current_city;
            $user->phone = $request->phone;
            $user->age = $request->age;
            $user->address = $request->address;
            $user->location_details = $request->location_details;
            $user->website = $request->website;
            $user->admin_role_type_id = null;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            Session::flash('success', 'Jobs added Successfully');
            return redirect()->route('user.profile', $user->user_name);

//            $flash_status = 'success';
//            $flash_message = 'User successfully registered';
//            $redirect_url=redirect()->route('user.profile',$user->user_name);
//            $data_status = true;

        }


    }

    public function forgotPassword(){
        return view ('user.forgot_password');
    }

    public function resetPassword(){
        return view ('user.reset');
    }
    public function getLogin(){
        return view('users.sign_in');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])){

            $flash_status = 'success';
            $data_status = true;
            $flash_message = 'Signed in successfully';
            Session::flash('success', 'Jobs added Successfully');
            return redirect()->route('user.profile', Auth ::user()->user_name);

//            if(isset($request->redirect_jobs)){
//                if(Auth::user()->role_type_id = RoleType::client){
//                    $flash_message = RoleType::CLIENT;
//                }else {
//                    $flash_message = route('user.profile', Auth::user()->user_name);
//                }
//            }else {
//                $redirect_url =  Session::get('backUrl') ? Redirect::to(Session::get('backUrl')) :   redirect()->route('user.profile', Auth::user()->user_name);
//            }




        } else{
            $flash_status = 'error';
            $data_status = false;
            $flash_message = 'Email Or password Is Incorrect';
            Session::flash('success', $flash_message);
            return redirect()->back();
        }
    }

    public function show(Request $request, $user_name){
        $user = User::where('user_name', $user_name) ->first();
        $job_post_id = $request -> job_post_id;
        $year = isset($user->age) ? $user->age->format('Y'):null;

        if(!empty($year)){
            $month = $user->age->format('m');
            $day = $user->age->format('d');
            $age = Carbon::createFromDate($year, $month, $day)->diff(Carbon::now()) ->format('%y years');
        }else {
            $age = null;
        }
        $education_types = EducationType::all();
        $education_lists = Education::where('user_id', $user->id)->get();
        foreach($education_lists as $education_list){
            $education_list['education_type_title'] = $education_list->education_type->title;
        }
        if($user->role_type_id == 2){

            $categories = Category::all();
            return view('users.freelancer_profile', compact('user','categories','age'));
        }else if ($user->role_type_id == 1){
            $jobs = Job::where('user_id',$user->id)->get();
            return view('users.client_profile',compact('user','jobs'));
        }



    }
}
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\EmailNotification;
use App\Models\User;
use App\Models\Job;
use Auth;
use App\Helpers\Helper;
use Carbon\Carbon;
use DB;
use App\Http\Controllers\Controller;

class JobAlert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job_alert:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $time_interval_of_job_post = 5; //Minutes
        $time_interval_date = Carbon::now()->subMinutes($time_interval_of_job_post)->toDateTimeString(); //Minutes
        $latest_job_posts = Job::where('created_at', '>', $time_interval_date)->get();
        $default_distance = 100;
        $email_notifications= EmailNotification::where(function($q) use ($time_interval_date) {
            $q->where('email_last_send', null)
                ->orWhere('email_last_send', '<' , $time_interval_date);
        })
            ->where('subscribe_push', true)
            ->get();
        $email_notifications_users = $email_notifications->pluck('user_id');
        $controller = new Controller();

        if(!empty($email_notifications) && !empty($latest_job_posts)){
            foreach($email_notifications as $email_notification){
                $user_distance = $email_notification->distance;
                $category_choice = unserialize($email_notification->category_choice);
                $user = $email_notification->user;
                $latitude = $user->latitude;
                $longitude = $user->longitude;

                // here you have to add code for subcategory

                foreach($latest_job_posts as $latest_job_post){
                    if(empty($category_choice) || in_array($latest_job_post->category_id, $category_choice)){
                        $job_distance = Helper::google_map_distance($latitude, $longitude, round($latest_job_post->lat, 1), $latest_job_post->lng, "K");
                        if($user_distance > $job_distance){
                            // send notification
                            Mail::send(['html'=>'email.job_post_mail'], [], function ($message)
                            {
                                $message->subject('Job Alert');
                                $message->from('info@jobhunt.com', 'Jobhunt');

                                $message->to('sahapuspita31@gmail.com');
                            });
                            $push_data['user'] = $email_notification->user;
                            $push_data['title'] = $latest_job_post->job_title;
                            $push_data['data'] = ['type' => 'job_post',
                                'job_post_id' => $latest_job_post->id];

                            $push_message = $controller->push_message($push_data);

                            if(isset($push_message->success)){
                                $push_message_status = 'success';
                            } else {
                                $push_message_status = 'no token';
                            }

                            $this->info('special:'. $user->email. ', status:' . $push_message_status. '\n');

                            $user->job_alert_mail_send = Carbon::now()->toDateTimeString();
                            $user->save();

                            $email_notification->email_last_send = Carbon::now()->toDateTimeString();
                            $email_notification->save();

                            sleep(1);
                        }
                    }
                }

            }
        }

        if(!empty($latest_job_posts)){
            foreach($latest_job_posts as $job_post){
                $latitude = $job_post->lat;
                $longitude = $job_post->lng;
                $related_users = User::select(DB::raw('*, ( 6367 * acos( cos( radians('.$latitude.') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('.$longitude.') ) + sin( radians('.$latitude.') ) * sin( radians( latitude ) ) ) ) AS distance'))
                    ->where('role_type_id', 1)
                    ->wherenotin('id', $email_notifications_users)
                    ->where(function($q) use ($time_interval_date) {
                        $q->where('job_alert_mail_send', null)
                            ->orWhere('job_alert_mail_send', '<' , $time_interval_date);
                    })
                    ->having('distance', '<', $default_distance)
                    ->orderBy('distance')
                    ->get();

                if(!empty($related_users)){
                    foreach($related_users as $user){
                        // send push or email notification.
                        Mail::send(['html'=>'email.job_post_mail'], [], function ($message)
                        {
                            $message->subject('Job Alert');
                            $message->from('info@jobhunt.com', 'Jobhunt');

                            $message->to('sahapuspita31@gmail.com');
                        });
                        $push_data['user'] = $user;
                        $push_data['title'] = $job_post->job_title;
                        $push_message = $controller->push_message($push_data);

                        if(isset($push_message->success)){
                            $push_message_status = 'success';
                        } else {
                            $push_message_status = 'no token';
                        }

                        $this->info('general_user:'. $user->email. ', status:' . $push_message_status. '\n');

                        $user->job_alert_mail_send = Carbon::now()->toDateTimeString();
                        $user->save();
                        sleep(1);
                    }
                }
            }
        }
    }
}

@extends('layout.master')
@section('title')
    Update Notification
@endsection
@section('content')
@include('include.header')
<div class="container ptop30 pbottom5">
    <div class="padding_bottom box_general">
        {!! Form::open(['action' => 'EmailNotificationController@store','method' => 'post']) !!}
        @if($user->role_type_id == 2)
            <div class="row">
                {{--<div class="col-md-3">--}}
                    {{--@include('includes.user_settings_menu')--}}
                {{--</div>--}}
                <div class="col-md-9">
                    <h3>Job Alert Notifications</h3>
                    <div class="notification-box">
                        <label>Would you like to be notified by email when a desired job in your area appears?</label><br>
                        <label>
                            <input type="radio" name="subscribe_email" value="1" {{ empty($email_notification) || $email_notification->subscribe_email ? 'checked': '' }}> YES
                        </label>

                        <label>
                            <input type="radio" name="subscribe_email" value="0" {{ empty($email_notification) || $email_notification->subscribe_email ? '': 'checked' }}> NO
                        </label>
                    </div>
                </div>

                <div class="notification-box">
                    <label>Would you like to receive notifications on your phone when a job appears in your area?</label><br>
                    <label>
                        <input type="radio" name="subscribe_push" value="1" {{ empty($email_notification) || $email_notification->subscribe_push ? 'checked': '' }}> YES
                    </label>

                    <label>
                        <input type="radio" name="subscribe_push" value="0" {{ empty($email_notification) || $email_notification->subscribe_push ? '': 'checked' }}> NO
                    </label>
                    <br>
                    <small class="form-text text-muted">You must have downloaded and logged into the Nuploy app on your cellular device in order for the notifications to appear on your phone.</small>
                </div>

                <div class="notification-box">
                    <label>What types of jobs are you interested in?</label>
                    @foreach($category_list as $category)
                        <label>
                            <input type="checkbox" name="category[]" {{ empty($email_notification) || in_array($category->id, $selected_category)? 'checked': ''}} value="{!! $category->id !!}"> {!! $category->category_name!!}
                        </label>
                    @endforeach
                </div>

                <div class="notification-box">
                    <label>How often would you like to receive job alerts?</label><br>
                @foreach($send_interval_list as $key =>$send_interval_item)
                        <label>
                            <input type="radio" name="send_interval_email" {{ empty($email_notification) || $email_notification->send_interval_email == $key? 'checked': ''}} value="{{ $key }}"> {{ $send_interval_item }}
                        </label>
                    @endforeach
            </div>
            </div>
    </div>
    @endif
    <div class="row top10">
        <div class="col-md-3">
            @if($user->role_type_id == 1)
            @endif
        </div>
        <div class="col-md-9">
            <h3>Message Notification</h3>
            <div class="notification-box">
                <label>Would you like to receive notifications when an employer sends you a message?</label><br>
                <label>
                    <input type="radio" name="subscribe_message" value="1" {{ empty($email_notification) || $email_notification->subscribe_message ? 'checked': '' }}> YES
                </label>

                <label>
                    <input type="radio" name="subscribe_message" value="0" {{ empty($email_notification) || $email_notification->subscribe_message ? '': 'checked' }}> NO
                </label>
            </div>
        </div>
    </div>
    @if($user->role_type_id == 2)
        <div class="row top10">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h3>Job Offer Notification</h3>
                <div class="notification-box">
                    <label>Would you like to receive a notification when you receive a job offer?</label><br>
                    <label>
                        <input type="radio" name="subscribe_job_offer" value="1" {{ empty($email_notification) || $email_notification->subscribe_job_offer ? 'checked': '' }}> YES
                    </label>

                    <label>
                        <input type="radio" name="subscribe_job_offer" value="0" {{ empty($email_notification) || $email_notification->subscribe_job_offer ? '': 'checked' }}> NO
                    </label>
                </div>
                <div class="top10 bottom10">
                    <input class="btn_1 medium" type="submit" value="Update Settings"  id="btn-login">
                </div>
            </div>
        </div>
    @else
        <div class="row top10">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h3>Job Applicant Notification</h3>
                <div class="notification-box">
                    <label>Would you like to receive a notification when someone applies to your job posting?</label><br>
                    <label>
                        <input type="radio" name="subscribe_job_applicant" value="1" {{ empty($email_notification) || $email_notification->subscribe_job_applicant ? 'checked': '' }}> YES
                    </label>

                    <label>
                        <input type="radio" name="subscribe_job_applicant" value="0" {{ empty($email_notification) || $email_notification->subscribe_job_applicant ? '': 'checked' }}> NO
                    </label>
                </div>
            </div>
        </div>

        <div class="row top10">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h3>Accepted Job Offer Notification</h3>
                <div class="notification-box">
                    <label>Would you like to be notified when an applicant accepts your job offer?</label><br>
                    <label>
                        <input type="radio" name="subscribe_job_offer_accept" value="1" {{ empty($email_notification) || $email_notification->subscribe_job_offer_accept ? 'checked': '' }}> YES
                    </label>

                    <label>
                        <input type="radio" name="subscribe_job_offer_accept" value="0" {{ empty($email_notification) || $email_notification->subscribe_job_offer_accept ? '': 'checked' }}> NO
                    </label>
                </div>
                <div class="top10 bottom10">
                    <input class="btn_1 medium" type="submit" value="Update Settings"  id="btn-login">
                </div>
            </div>
        </div>
    @endif

    {!! Form::close() !!}
     </div>


     </div>
    @include('include.footer')
@endsection

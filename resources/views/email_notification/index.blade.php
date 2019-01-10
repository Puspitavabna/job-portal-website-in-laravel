@extends('layout.master')
@section('title')
    Update Notification
@endsection

@section('content')
    @include('include.header')
    <div id="results">
        <div class="container">
            <div class="row">
                <div class="col-md-10 pbottom7">
                    <h4><strong>Job Alert Notification Setting</strong></h4>
                </div>
            </div>
            <!----/row--->
        </div>
        <!---/container-->
    </div>

    <div class="container ptop30 pbottoms5">
        @if($errors->any() || Session::has('error'))
            <div class="alert alert-danger in text-center">
                <div id="flash_notice">{{ Session::get('error') }}</div>
            </div>
            @endif

        @if(Session::has('success'))
            <div class="alert alert-success in text-center">
                <div id="flash_notice">{{ Session::get('success') }}</div>
            </div>
            @endif

        <div class="box_general padding_bottom">
            @if($user->role_type_id == 2 )
                <div class="row">
                    <div class="col-md-3">
                        {{--@include('include')--}}
                    </div>
                    <div class="col-md-9">
                        <h3>Job Alert Notification</h3>
                        <div class="row">
                            <div class="col-md-10">
                                <p><strong>Job Category: </strong>
                                @if(empty($category_list))
                                    All
                                @else
                                @foreach($category_list as $category)
                                    <span>
                                        {!!   $category->category_name !!}
                                    </span>,
                                    @endforeach
                                    @endif
                                </p>
                                <p><strong>Send Interval Email:</strong><span class="left-30">{{ data_get($email_notification, 'send_interval_email' , 1) }} Days</span></p>
                                <p><strong>Subscribed Email: </strong>
                                <span class="left-35">
                                    {{ empty($email_notification) || $email_notification->subscribe_email ? 'Yes' : 'No' }}
                                </span>
                                </p>
                                <p><strong>Subcribed Push: </strong></p>
                                <span class="left35">
                                    {{ empty($email_notification) || $email_notification->subscribe_push? 'Yes' : 'No' }}
                                </span>
                                <p>
                                <strong>Last email sent: </strong>
                                <span>
                                    {{ empty($email_notification)? 'Never': \Carbon\Carbon::parse($email_notification->email_last_send)->format('F j, Y') }}
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                    <div class="row">
                        <div class="col-md-3">
                        @if($user->role_type_id == 1)
                            @endif
                        </div>
                            <div class="col-md-9">
                                <h3>Message Notification</h3>
                                <div class="row">
                                <div class="col-md-10">
                                    <p><strong>Subcribed Message: </strong>
                                    <span class="left35">
                                        {{ empty($email_notification) || $email_notification->subscribe_message ? 'Yes' : 'No' }}
                                    </span>
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>
              @if($user->role_type_id == 2)
                      <div class="row bottom10">
                          <div class="col-md-3"></div>
                          <div class="col-md-9">
                              <h3>Job Offer Notification</h3>
                              <div class="row">
                                  <div class="col-md-10">
                                      <p><strong>Subscribed Job offer: </strong>
                                      <span class="left-35">
                                          {{ empty($email_notification) || $email_notification->subscribe_job_offer ? 'Yes' :  'No' }}
                                      </span>
                                      </p>
                                      <a href="{{ route('email_notification.edit_settings') }}"><div class="btn btn-info bottom" style="float:right;">Change Settings</div></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                @else
                  <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-9">
                          <h3>Job Applicant Notification</h3>
                          <div class="row">
                              <div class="col-md-10">
                                  <p><strong>Subscribed Job Applicant: </strong>
                                      <span class="left-35">
                                          {{ empty($email_notification) || $email_notification->subscribe_job_applicant ? 'Yes' : 'No' }}
                                      </span>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row bottom10">
                      <div class="col-md-3"></div>
                      <div class="col-md-9">
                          <h3>Job Offer Accept Notification</h3>
                          <div class="row">
                              <div class="col-md-10">
                                  <p><strong>Subscribed Job Offer Accept: </strong>
                                      <span class="left-35">
                                          {{ empty($email_notification) || $email_notification->subscribe_job_offer_accept ? 'Yes' : 'No'}}
                                      </span>
                                  </p>
                                  <a href="{{route('email_notification.edit_settings')}}"><div class="btn btn-info bottom10" style="float:right;">Change Settings</div></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endif
           </div>
    </div>
                  @include('include.footer')
                  @endsection
@extends('layout.master')
@section('content')
@include('include.header')

    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            @foreach($role_types as $role_type)
                @if($role_type->id ==2)
                  <div class="col-md-5 individual-work">
                      <h2>I am an individual looking for work</h2>
                      <p>Register as an individual, create a profile and apply to freelancer jobs!</p>
                      <div id="button">
                          <a href="{{url('user/sign_up/type/'.$role_type->name)}}" class="btn green">Register Now</a>
                      </div>
                  </div>
                <div class="col-md-2 individual-or-business">
                    <span>OR</span>
                </div>
                @elseif($role_type->id == 1)
                <div class="col-md-5 business-work">
                    <h2>I am a business user and want to hire freelancer</h2>
                    <p>Register for a business account, create a profile for you and create a job posting</p>
                    <div id="button">
                        <a href="{{url('user/sign_up/type/'.$role_type->name)}}" class="btn-green">Register now</a>
                    </div>
                </div>
                @endif
                @endforeach
        </div>
    </div>
    @include('include.footer')
    @endsection

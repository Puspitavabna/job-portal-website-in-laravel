@extends('layout.master')
@section('content')
@include('include.header')


{{--<div class="account-popup-area signup-popup-box">--}}
    {{--<div class="account-popup">--}}
        {{--<span class="close-popup"><i class="fa fa-close"></i></span>--}}
        {{--<h3>Sign Up</h3>--}}
        {{--<div class="select-user">--}}
            {{--<span>Candidate</span>--}}
            {{--<span>Employer</span>--}}
        {{--</div>--}}
        {{--<form>--}}
            {{--<div class="cfield">--}}
                {{--<input type="text" placeholder="Username" />--}}
                {{--<i class="fa fa-user"></i>--}}
            {{--</div>--}}
            {{--<div class="cfield">--}}
                {{--<input type="password" placeholder="********" />--}}
                {{--<i class="fa fa-key"></i>--}}
            {{--</div>--}}
            {{--<div class="cfield">--}}
                {{--<input type="text" placeholder="Email" />--}}
                {{--<i class="fa fa-envelope-o"></i>--}}
            {{--</div>--}}
            {{--<div class="dropdown-field">--}}
                {{--<select data-placeholder="Please Select Specialism" class="chosen">--}}
                    {{--<option>Web Development</option>--}}
                    {{--<option>Web Designing</option>--}}
                    {{--<option>Art & Culture</option>--}}
                    {{--<option>Reading & Writing</option>--}}
                {{--</select>--}}
            {{--</div>--}}
            {{--<div class="cfield">--}}
                {{--<input type="text" placeholder="Phone Number" />--}}
                {{--<i class="fa fa-phone"></i>--}}
            {{--</div>--}}
            {{--<button type="submit">Signup</button>--}}
        {{--</form>--}}
        {{--<div class="extra-login">--}}
            {{--<span>Or</span>--}}
            {{--<div class="login-social">--}}
                {{--<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>--}}
                {{--<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

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

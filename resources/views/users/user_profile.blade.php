@extends('layout.master')
@section('content')
@include('include.header')

<div class="bg_color_2" >
    <div class="container margin_60_35">
        <div id="login">
            <h1>Please login to Find Jobs!</h1>
            <div class="box_form">
                <form method="POST" action="{{'user.sign_in'}}">
                    {{csrf_field()}}
                    <div class="form-group">
                       <input type="email" name="email" class="form-control" placeholder="Your email address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Your password">
                    </div>
                    <a href="{{url('users/forgot_password')}}"><small>Forgot password?</small></a>
                    <div class="form-group text-center add_top_20">
                        <input class="btn_1 medium" type="submit" value="Login">
                    </div>
                </form>
                <p class="text-center link_bright">Do not have an account yet? <a href="{{'users/signup'}}"><strong>Register now!</strong></a></p>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
@endsection
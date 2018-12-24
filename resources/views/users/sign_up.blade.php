@extends('layout.master')
@section('content')
@include('include.header')
    <div class="bg_color_2">
        <div class="container margin_60_35">
            @if($role_type->id == 2)
                <div id="register">
                    <h1>Register as a Freelancer!</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <form method="POST" action="{{route('user.post.sign_up')}}">
                                {{ csrf_field() }}
                                <div class="box_form">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="Your first name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Your last name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control" placeholder="date" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="address" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Current city</label>
                                        <input type="text" name="current_city" class="form-control" placeholder="current_city" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Location details</label>
                                        <input type="description" name="location_details" class="form-control" placeholder="location_details" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" name="website" class="form-control" placeholder="website" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your email address" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Your password" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="password2" placeholder="Confirm password" required="">
                                    </div>
                                    <input type="hidden" name="role_type_id" value="{{$role_type->id}}" class="form-control" required="1">

                                    <div id="pass-info" class="clearfix"></div>
                                    <div class="form-group text-center add_top_30">
                                        <input class="btn-1" type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/row-->
                </div>
            @elseif($role_type->id == 1)
            <div id="register">
                <h1>Register as a Client! </h1>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <form method="POST" action="{{route('user.post.sign_up')}}">
                            {{ csrf_field() }}
                            <div class="box_form">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="Your first name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Your last name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Business Name</label>
                                    <input type="text" name="business_name" class="form-control" placeholder="Business name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="phone" required="">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="address" required="">
                                </div>
                                <div class="form-group">
                                    <label>Current city</label>
                                    <input type="text" name="current_city" class="form-control" placeholder="current_city" required="">
                                </div>
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" name="website" class="form-control" placeholder="website" required="">
                                </div>
                                <div class="form-group">
                                    <label>Location details</label>
                                    <input type="description" name="location_details" class="form-control" placeholder="location_details" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your email address" required="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Your password" required="">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="password2" placeholder="Confirm password" required="">
                                </div>
                                <input type="hidden" name="role_type_id" value="{{$role_type->id}}" class="form-control" required="1">

                                <div id="pass-info" class="clearfix"></div>
                                <div class="form-group text-center add_top_30">
                                    <input class="btn-1" type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/row-->
            </div>
                @endif
                <!--/register-->
        </div>
    </div>




    @include('include.footer')
    @endsection
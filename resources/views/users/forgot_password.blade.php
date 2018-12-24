@extends('layouts.master')
@section('content')
@include('include.header')
    <div class="bg_color_2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-4">
                        <div class="panel pass-form">
                            <div class="panel-body">
                                <div class="text-center">
                                    <h3><i class="icon-lock fa-4x icon-color"></i></h3>
                                    <h2 class="text-center">Forgot Password?</h2>
                                    <p>You can reset your password here.</p>
                             <div class="panel-body">
                                 <form class="form-horizontal" role="form" method="POST" action="/password/email">
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     <div class="form-group">
                                         <div class="input-group">
                                             <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <input name="recover-submit" class="btn btn-lg btn-primary btn-block forget-btn" value="Reset Password" type="submit">
                                     </div>

                                     <input type="hidden" class="hide" name="token" id="token" value="">
                                 </form>

                             </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('include.footer')
    @endsection
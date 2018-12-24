@extends('layout.master')
@section('title')
    Freelancer profile
@endsection
@section('content')
@include('include.header')

    <div class="container margin_60">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <nav id="secondary_nav">
                    <div class="container">
                        <ul class="clearfix">
                            <li><a href="#section_1" class="active">General info</a></li>
                            <li><a href="#section_1" class="active">Vabna</a></li>
                        </ul>
                    </div>
                </nav>
                <div id="section_1">
                    <div class="box_general_3">
                        <div class="profile" id="address">
                            @if(Session::has('address'))
                                <div class="text-center alert {{ Session::get('alert-class', 'alert-success') }}">
                            @endif
                        </div>

                </div>
            </div>
        </div>
    </div>
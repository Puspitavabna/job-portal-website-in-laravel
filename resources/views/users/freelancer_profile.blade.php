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
                        </ul>
                    </div>
                </nav>
                <div id="section_1">
                    <div class="box_general_3">
                        <div class="profile" id="address">
                            @if(Session::has('address'))
                                <div class="text-center alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('address') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-lg-4 col-md-3">
                                    <figure>
                                        <img src="{{ $user->avatar_url }}"class="img-fluid">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-9">
                                    <h1>{{ ucfirst($user->first_name) }} {{ ucfirst($user->last_name) }}</h1>
                                    <div class="row top-25">
                                        <div class="col-md-7">
                                            <ul class="contacts">
                                                @if(Auth::check() && $user->id == Auth::user()->id)
                                                    <li>
                                                        <h6>Address</h6>
                                                        @if(!$user->address && !$user->current_city)
                                                            No Record Found
                                                            @endif
                                                        {{ $user->address }}
                                                        {{ $user->current_city }}
                                                    </li>
                                                    <li>
                                                        <h6>Phone</h6>
                                                        @if($user->phone != null)
                                                            <a href="tel://{{$user->phone}}">{{$user->phone}}</a>
                                                        @endif
                                                    </li>
                                                    @endif
                                            </ul>
                                        </div>
                                        {{--<div class="col-md-5">--}}
                                            {{--@if(Auth::check() && $user->id == Auth::user()->id)--}}
                                                {{--<p class="top20">--}}
                                                    {{--<a href="#section_1" class="active">General info</a>--}}
                                                {{--</p>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!----/profile-->
                        <div id="introduction">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="indent_title_in">
                                        @if(Session::has('intro'))
                                            <div class="text-center alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('intro') }}</div>
                                        @endif
                                        <div class="pull-left">
                                            <h3>Introduction</h3>
                                        </div>
                                        <div class="pull-right">
                                            @if(Auth::check() && $user->id == Auth::user()->id)
                                                <a href="#" class="btn_1 pull right" data-target="#add_introduction">Add/Edit</a>
                                             @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="wrapper_indent" id="introduction">
                                    @if(!$user->introduction)
                                        No Record Found
                                    @else
                                        {{ $user->introducation }}
                                    @endif
                                </div>
                            </div>
                            <hr>

                                <div id="Education">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="indent_title_in">
                                                @if(Session::has('education'))
                                                    <div class="text-center alert {{ Session::get('alert-class','alert-success') }}">{{ Session::get('education') }}</div>
                                                @endif
                                                <div class="pull-left">
                                                    <h3>Education</h3>
                                                </div>
                                                <div class="pull-right">
                                                    @if(Auth::check() && $user->id == Auth::user()->id)
                                                        <a href="#" class="btn_1" data-toggle="modal" data-target="#add_education">
                                                            Add Education
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wrapper_indent">
                                    {{--@foreach($education_lists as $education_list)--}}
                                        {{--<div class="education-row">--}}
                                            {{--@if(Auth::check()&& $user->id == Auth::user()->id)--}}
                                                {{--<form method="POST" action="{{ route('education.destroy',$education_list->id) }}">--}}
                                                    {{--{{ csrf_field() }}--}}
                                                    {{--<input type="hidden" name="_method" value="DELETE">--}}
                                                    {{--<a href="" onclick="return confirm('Are you sure to delete ?')">--}}
                                                        {{--<button type="submit" class="button_one gray delete pull-right left5 top5">--}}
                                                            {{--<i class="fa fa-fw fa-times-circle-o"></i>--}}
                                                            {{--Delete--}}
                                                        {{--</button>--}}
                                                    {{--</a>--}}
                                                {{--</form>--}}
                                                {{--<a href="" data-toggle="modal" data-target="#edit_education{{$education_list->id}}">--}}
                                                    {{--<button type="submit" class="button_one gray approve pull-right top5">--}}
                                                        {{--<i class="fa fa-fw fa-check-circle-o"></i>--}}
                                                        {{--Edit--}}
                                                    {{--</button>--}}
                                                {{--</a>--}}
                                                {{--@endif--}}
                                            {{--<h6>{{ ucfirst($education_list>school) }}</h6>--}}
                                            {{--@foreach($education_types as $education_type)--}}
                                                {{--@if($education_list->education_type_id == $education_type->id)--}}
                                                    {{--<div>{{ ucfirst($education_type->title) }}</div>--}}
                                                {{--@endif--}}

                                                {{--@endforeach--}}
                                            {{--<div>{{ ucfirst($education_list->degree) }}</div>--}}
                                            {{--<div class="edu-year">{{ $education_list->completed_at }}</div>--}}

                                        {{--</div>--}}
                                        {{--<hr class="right-30">--}}
                                        {{--@endforeach--}}
                                </div>
                            </div>
                            <hr>
                            <div id="Experience">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="indent_title_in">
                                            @if(Session::has('experience'))
                                                <div class="text-center alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('experience') }}</div>
                                            @endif
                                            <div class="pull-left">
                                                <h3>Experience</h3>
                                            </div>
                                            <div class="pull-right">
                                                @if(Auth::check() && $user->id == Auth::user()->id)
                                                    <a href="#" class="btn_1 pull right" data-target="#add_experience">Add Experience</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wrapper_indent" id="introduction">

                                    </div>
                                </div>



                        </div>
                        <!---/wrapper indent-->

                    </div>
                </div>
            </div>
        </div>
</div>
@include('include.footer')
@endsection
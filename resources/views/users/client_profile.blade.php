@extends('layout.master')
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
            </div>
        </div>
    </div>
    @include('include.footer')
@extends('layout.master')
@section('content')
@include('include.header')
    <div class="container">
        <h2 class="text-center top30 bottom10">Job Posts</h2>
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    @foreach($jobs as $key => $job)
                        <div class="col-md-6 nopadding">
                            <div class="box-style">
                                <a href="{{ $job->job_url }}" class="custom-card">
                                    <h4 class="job_title">{{$key+1}}.{{$job->job_title}}</h4>
                                    <p>{{ str_limit(strip_tags($job->job_description), $limit = 130, $end = '...') }}</p>
                                </a>
                                <hr>
                                <div class="float-left">
                                     <span class="btn-xs btn-info"><i class="fa fa-tags"></i>{{ $job->category->name }}</span>
                                </div>
                                <div class="btn-wrap float-right">
                                    <a class="btn-sm btn-success" href="{{ $job->job_tutorial }}">Read more</a>
                                </div>
                                <div class="clearfix"></div>
                        </div>
                        </div>
                        @endforeach
            </div>
        </div>
    </div>
@include('includes.footer')

@endsection
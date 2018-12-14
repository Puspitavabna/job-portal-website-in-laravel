@extends('layout.master')
@section('content')
    @include('include.header')
    <div class="container">
        <h2 class="text-center top30 bottom10">Job Posts</h2>
        <div class="row">
            <div class="col-md-10">
                    @foreach($jobs as $job)
                    <div class="box-style">
                    <h4 class="job_title">{{$job->job_title}}</h4>
                    <p>{{ str_limit(strip_tags($job->job_description), $limit = 130, $end = '...') }}</p>
                    <p>{{ ($job->location) }}</p>
                    <p>{{ ($job->budget) }}</p>
                    </a>
                    <hr>

                    @endforeach
            </div>
        </div>
    </div>
    @include('include.footer')

@endsection


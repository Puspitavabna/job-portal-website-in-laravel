@extends('layout.master')
@section('job_title')
    {{ $job->job_title. '|' . $job->category->category_name . '|' }}
    @endsection
@section('content')
    @include('include.header')
    <div class="container-fluid top15">
        <div class="row">
            <div class="col-md-3">
                <table class="table table-striped">
                    <tbody>
                    <div class="list-group">
                        @foreach($category_job as $category_job)
                            <div>
                                <a class="list-group-item list-group-item-action {{ Request::url() == $category_tutorial->tutorial_url ? 'active' : '' }}" href="{{ $category_tutorial->tutorial_url }}">{{$category_tutorial->title}}</a>
                            </div>
                        @endforeach
                    </div>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6 individual-article nopadding">
                <div class="box-style">
                    <h3 class="tutorial-title">{{ $job->job_title }} | {{$job->category->category_name}}</h3>
                    <hr>
                    <div>{!! $job->description !!}</div>

                    <div class="clearfix"></div>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
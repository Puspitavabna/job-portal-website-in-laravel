@extends('layout.master')
@section('content')
@section('run_custom_css_file')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                <div class="float-right"><a class="btn btn-success" target="_blank" href="{{ route('job.show', $job->slug) }}">View</a></div>
                <div class="clearfix"></div>
                <form method="post" action="{{ route('admin_job.update', $job->slug) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-level" for="name" >Title</label>
                        <input class="form-control" name="job_title" type="text" value="{{$job->job_title}}" />
                    </div>
                    <div class="form-group">
                        <label class="control-level" for="name" >Budget</label>
                        <input class="form-control" name="budget" type="budget" value="{{$job->budget}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-level" for="name" >Is payment</label>
                        <input class="form-control" name="is_payment" type="number" value="{{$job->is_payment}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-level" for="name" >Status</label>
                        <input class="form-control" name="status" type="number" value="{{$job->status}}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-level" for="name" >Show Location</label>
                        <input class="form-control" name="location" type="text" value="{{$job->location}}"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label " for="text" >Description</label>
                        <textarea class="summernote" name="job_description" placeholder="Description" value="{{$job->description}}"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-level" for="number" >Job duration Type id</label>
                        <input class="form-control" name="job_duration_type_id" type="number" placeholder="job_duration_type_id" value="{{$job->job_duration_type_id}}"/>
                    </div>
                    <div class="form-group category-box">
                        <div>Select category here:</div>
                        <select name="category_id" class="form-control category_select" data-value="1">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id}}"> {{ $category->category_name }} </option>
                            @endforeach
                        </select>
                    </div>8u
                    <div class="form-group category-box">
                        <div>Select User here:</div>
                        <select name="user_id" class="form-control category_select" data-value="1">
                            <option value="">Select User</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id}}"> {{ $user->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                        <button type="button" class="btn btn-danger pull-right" id="clear">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
@section('run_custom_js_file')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
@endsection
@section('run_custom_jquery')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endsection
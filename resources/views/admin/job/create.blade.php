@extends('layout.master')
@section('content')
@section('run_custom_css_file')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
@endsection
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <form method="post" action="{{ route('admin_job.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-level" for="name" >Title</label>
                            <input class="form-control" name="job_title" type="text" placeholder="Title" required/>
                        </div>
                        <div class="form-group">
                            <label class="control-level" for="name" >Budget</label>
                            <input class="form-control" name="budget" type="number" placeholder="budget" required/>
                        </div>
                        <div class="form-group">
                            <label class="control-level" for="name" >Location</label>
                            <input class="form-control" name="show_location" type="text" placeholder="show_location" required/>
                        </div>
                    </form>
                    <div class="form-group">
                        <textarea class="summernote" name="job_description" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group category-box">
                        <div>Select category here:</div>
                        <select name="category_id" class="form-control category_select" data-value="1">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id}}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group category-box">
                        <div>Select User here:</div>
                        <select name="user_id" class="form-control category_select" data-value="1">
                            <option value="">Select Category</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id}}"> {{ $user->name }} </option>
                            @endforeach
                        </select>
                    </div>
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
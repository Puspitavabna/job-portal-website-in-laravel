@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Here you will get jobs. <a href="{{route('admin_job.create')}}">Create Jobposts</a>
                </div>
                <div class="alert alert-success">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>job_title</th>
                            <th>job_description</th>
                            <th>Category_name</th>
                            <th>User</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $key => $job)
                            {{ csrf_field() }}
                            <tr>
                                <td>{{ $job->id }}</td>
                                <td>{{ $job->job_title }}</td>
                                <td>{{ $job->job_description }}</td>
                                <td>{{ $job->category->category_name }}</td>
                                <td>{{ $job->user->user_name }}</td>
                                <td width="5%">
                                    <a href="{{ $job->job_url }}" target="_blank" class="btn-sm btn-primary">Views</a>
                                    <a href="{{route('admin_job.edit', $job->slug) }}" target="_blank" class="btn-sm btn-warning">Edit</a>
                                    <form method="POST" action="{{route('admin_job.destroy', $job->slug)}}">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input name="submit" type="Delete" class="btn-sm btn-danger">

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
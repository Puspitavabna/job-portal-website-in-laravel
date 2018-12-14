@extends('layout.master')
@section('content')
@include('include.header')
    <div class="container">
        <h2 class="text-center top30 bottom10">Job Posts</h2>
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    @foreach($categories as $category)
                        <li style="text-transform: capitalize;"><a href="{{ route('category.post',['slug' => $category->slug ])}}">{{ $category->category_name }}</a>
                        </li>
                    @endforeach

            </div>
        </div>
    </div>
@include('include.footer')

@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $slug)
    {
//        $job = Job:: where('slug', $slug)->first();
//        $category_jobs= Job::where('category_id',$job->category_id)->get();
//        return view('job.show',compact('job','category_jobs'));

//        $categories = Category::orderBy('created_at', 'desc')->get();
//        $category= Category::where('slug',$slug)->first();
//
//        if(!empty($category)){
//            $jobs= Job::where('category_id' , $category->id)
//                ->orderBy('created_at', 'desc')->Paginate(5);
//            return view('job.show', compact('categories','jobs', 'category'));
//        }

    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

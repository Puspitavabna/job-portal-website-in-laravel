<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Job;
use App\User;
use App\Models\Category;
use DB;
use Auth;
class AdminJobController extends Controller{
    public function index(){
        $jobs = Job::where('status',true)->orderBy('created_at','desc')->Paginate(100);
        return view('admin.job.index',compact('jobs'));
    }
    public function create(){
        $categories= Category::all();
        $users = User::all();
        return view('admin.job.create', compact('categories', 'users'));

    }
    public function store(Request $request)
    {
        $slug = strtolower($request['job_title']);
        $slug = str_replace(' ', '-', $slug);
        $job = new Job();
        $job->job_title = $request->job_title;
        $job->job_description = $request->job_description;
        $job->budget = $request->budget;
        $job->slug = $slug;
        $job->status = true;
        $job->location = $request->location;
        $job->is_payment = $request->is_payment;
        $job->job_duration_type_id = $request->job_duration_type_id;
        $job->category_id = $request->category_id;
        $job->user_id = Auth::user()->id;
        $job->save();
        Session::flash('success','Jobs added Successfully');
        return redirect()->route('admin_job.index');
    }
    public function edit($slug){
        $job = Job::where('slug',$slug)->first();
        $users = User::all();
        $categories = Category::all();
        return view('admin.job.edit', compact('job', 'users', 'categories'));
    }
    public function update(Request $request, $slug){
        $job = Job::where('slug', $slug)->first();
        $job->job_title = $request->job_title;
        $job->job_description = $request->job_description;
        $job->budget = $request->budget;
        $job->slug = $slug;
        $job->status = null;
        $job->show_location = $request->show_location;
        $job->is_payment = $request->is_payment;
        $job->job_duration_type_id = $request->job_duration_type_id;
        $job->category_id = $request->category_id;
        $job->user_id = Auth::user()->id;
        $job->save();
        dd($job);
        Session::flash('success','Jobs updated Successfully');
        return redirect()->route('admin_job.edit',$job->slug);
    }
    public function destroy($slug){
        $job = Job::where('slug', $slug)->first();
        if(!$job){
            return redirect()->route('admin_job.index')->with(['fail' => 'Page not found !']);
        }
        $job->delete();
        Session::flash('success','Jobs deleted Successfully');
        return redirect()->route('admin_job.index');

    }

}
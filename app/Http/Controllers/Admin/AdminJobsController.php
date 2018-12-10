<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Support\Facades\Session;

class AdminJobsController extends Controller{
    public function index(){
        $jobs = Job:: where('status',true)->orderBy('created at','desc')->Paginate(100);
        return view('admin.jobs.index',compact('jobs'));
    }
    public function create(){
        $categories= Category::all();
        $users = User::all();
        return view('admin.jobs.create', compact('categories', 'users'));

    }
    public function store(Request $request)
    {
        $slug = strtolower($request['title']);
        $slug = str_replace(' ', '-', $slug);
        $job = new Job();
        $job->job_title = $request->job_title;
        $job->job_description = $request->job_description;
        $job->budget = $request->budget;
        $job->slug = $slug;
        $job->status = null;
        $job->show_location = $request->show_location;
        $job->is_location = null;
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
        $job->is_location = null;
        $job->is_payment = $request->is_payment;
        $job->job_duration_type_id = $request->job_duration_type_id;
        $job->category_id = $request->category_id;
        $job->user_id = Auth::user()->id;
        $job->save();
        Session::flash('success','Jobs updated Successfully');
        return redirect()->route('admin_job.edit',$job->slug);
    }
    public function destroy($slug){
        $job = Job::where('slug', $slug)->first();
        if(!$job){
            return redirect()->route(admin_tutorial.$this->index()->with(['fail' => 'Page not found !']));
        }
        $job->delete();
        Session::flash('success','Jobs deleted Successfully');
        return redirect()->route('admin_job.index');

    }

}
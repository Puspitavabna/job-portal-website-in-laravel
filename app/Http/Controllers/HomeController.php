<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
  {

       $categories = Category::orderBy('created_at', 'desc')->get();

            return view('home.index', compact('categories'));
  }

  public function getCategoryPost($slug){
      $categories = Category::orderBy('created_at', 'desc')->get();
      $category= Category::where('slug',$slug)->first();

      if(!empty($category)){
          $jobs= Job::where('category_id' , $category->id)
                  ->orderBy('created_at', 'desc')->Paginate(5);
          return view('home.job', compact('categories','jobs', 'category'));
      }
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

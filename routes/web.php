<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/',[
    'uses' => 'HomeController@index',
    'as' =>'home.index'
]);

Route::get('/job/{category}/{slug}',[
    'uses' => 'JobController@show',
    'as' =>'job.show'
]);
Route::get('/category/{slug}',[
    'uses' => 'HomeController@getCategoryPost',
    'as' =>'category.post'
]);

//Admin Controller
Route::group(['middleware' => 'auth' , 'prefix' => 'admin'] , function(){

    Route::get('/',[
        'uses' => 'Admin\AdminController@index',
        'as' => 'admin.index'
    ]);

    Route::post('/admin_login', [
        'uses' => 'Admin\AdminController@login',
        'as' => 'admin_post_login'
    ]);

    Route::resource('/admin_job', 'Admin\AdminJobController');

});


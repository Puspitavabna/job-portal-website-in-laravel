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

Route::get('/category/{slug}',[
    'uses' => 'JobController@show',
    'as' =>'job.show'
]);
Route::get('/category/{slug}',[
    'uses' => 'HomeController@getCategoryPost',
    'as' =>'category.post'
]);

Route::get('/user/forgot_password', [
    'uses' => 'UserController@forgotPassword',
    'as' => 'user.forgot_password'
]);
//
Route::get('/users/sign_in', [
    'uses' => 'UserController@getLogin',
    'as' => 'login'
]);
//
Route::post('/users/sign_in', [
    'uses' => 'UserController@postLogin',
    'as' => 'user.sign_in'
]);
//
Route::get('/users/sign_up', [
    'uses' => 'UserController@beforeGetRegister',
    'as' => 'user.sign_up'
]);
Route::get('user/sign_up/type/{name}', 'UserController@getRegister');
Route::post('/user/sign_up/type/', [
    'uses' => 'UserController@postRegister',
     'as'  => 'user.post.sign_up'
]);

Route::get('/users/{user_name}',[
    'uses' => 'UserController@show',
    'as' => 'user.profile'

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


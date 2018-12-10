<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller{
    public function index(){
        return view('admin.index');
    }
}
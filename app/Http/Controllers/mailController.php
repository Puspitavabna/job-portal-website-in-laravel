<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
  public function send()
  {
      Mail::send(['text'=>'mail'],['name','Puspita'],function ($message){
          $message->to('sahapuspita31@gmail.com','To Jobhub')->subject('Test Email');
          $message->from('puspitagit77@gmail.com','Jobhub');
      });
  }
}
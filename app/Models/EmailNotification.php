<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EmailNotification extends Model
{
    public function email_notification(){
        return $this->hasMany('App\Models\EmailNotification');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
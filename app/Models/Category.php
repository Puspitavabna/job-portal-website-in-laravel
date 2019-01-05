<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

{
    public function jobs(){
        return $this->hasMany('App\Models\Job');
    }
    public function user(){
        return $this->hasMany('App\Model\User');
    }
}
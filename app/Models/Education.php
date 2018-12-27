<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public function education_type(){
        return $this->belongsTo('App\Models\EducationType');
    }
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}




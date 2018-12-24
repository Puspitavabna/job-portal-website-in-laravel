<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'api_token', 'role_type_id', 'first_name', 'last_name', 'business_name'
    ];

    protected $dates = ['age'];

    protected $appends = ['avatar_url', 'full_name'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];

    public function setAgeAttribute($value)
    {
        $this->attributes['age'] = (new Carbon($value))->format('Y-m-d');
    }

    public function getAvatarUrlAttribute()
    {
        if (!empty($this->avatar)) {
            $file = config('constants.profile_upload')
                . $this->created_at->year . '/' . $this->created_at->format('m') . '/'
                . $this->avatar;

            $s3_file_path = Storage::disk('s3')->url($file);
        } else {
            $s3_file_path = asset('/images_old/user.png');
        }
        return $this->attributes['avatar_url'] = $s3_file_path;
    }

    public function role_type()
    {
        return $this->belongsTo('App\Models\RoleType', 'role_type_id');
    }

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
}

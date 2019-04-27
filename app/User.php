<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'email_verified_at',
        'remember_token',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id'

    ];




    public function company()
    {
        return $this->hasMany('App\Models\Company');
    }


    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }




    public function tasks()
    {
        return $this->belongsToMany('App\Task');
    }



    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

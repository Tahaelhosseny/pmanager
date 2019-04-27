<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable =
        [
            'id',
            'description',
            'user_id',
            'name',
            'days',
            'company_id'
        ];




    public function company()
    {
        return $this->belongsToMany('App\Company');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}

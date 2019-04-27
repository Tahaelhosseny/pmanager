<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =
        [
            'id',
            'name',
            'description',
            'days',
            'hours',
            'project_id',
            'company_id',
            'user_id'
        ];



    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function users()
    {
        return $this->belongsToMany('App\User');
    }




}

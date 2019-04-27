<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    protected $fillable =
        [
            'id',
            'project_id',
            'user_id'
        ];
}

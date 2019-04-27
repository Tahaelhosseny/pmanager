<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'body',
        'user_id',
        'url',
        'commenttable_Id',
        'commenttable_type',

    ];
}

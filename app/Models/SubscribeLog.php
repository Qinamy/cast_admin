<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscribeLog extends Model
{
    //
    use SoftDeletes;
    protected $table = 'subscribe_log';

    protected $guarded = ['id'];


    protected $casts=[
        'message' => 'array',
        'created_at' => 'string',
    ];



}

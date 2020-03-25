<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeviceDiagnose extends Model
{
    //
    use SoftDeletes;
    protected $table = 'device_diagnose';

    protected $guarded = ['id'];
}

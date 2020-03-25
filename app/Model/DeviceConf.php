<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeviceConf extends Model
{
    //
    use SoftDeletes;
    protected $table = 'device_conf';

    protected $guarded = ['id'];
}

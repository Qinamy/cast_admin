<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Log;


class DeviceController extends BaseController
{

    public function indexview(){

        Log::notice('@@'.PHP_EOL.PHP_EOL.'indexview');
        return view('device/index');
    }

    public function index(Request $request)
    {
        Log::notice('@@'.PHP_EOL.PHP_EOL.'index');
        Device::where('mobile','')->get();
    }

}
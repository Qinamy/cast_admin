<?php


namespace App\Http\Controllers\Services;
use App\Models\DeviceConf;
use App\Models\DeviceLog;
use App\Models\Device;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class MqttService
{

    public static function log_exist($dev_id,$epoch,$name)
    {
        $log = DeviceLog::where('dev_id',$dev_id)->where('epoch',$epoch)->where('name',$name)->first();

        return !empty($log);
    }

    public static function device_exist($dev_id)
    {
        $dev = Device::where('id',$dev_id)->first();

        return !empty($dev);

    }

    public static function device_insert($dev_id)
    {
        Device::create([
            'id' => $dev_id,
            'status' => 1
        ]);
    }

    public static function device_diagnose($data)
    {
        $device_device_conf = DeviceConf::where('dev_id',$data->dev_id)->get();

        $keyed_device_conf = $device_device_conf->keyBy(function($item){
           return $item->media_id;
        });

        foreach($data as $real_conf){
            $expected_conf = $keyed_device_conf[$real_conf->media_id] ?? null;
            self::compare_conf($real_conf,$expected_conf);
        }

    }

    public static function compare_conf()
    {

    }

    public static function md5($array)
    {
        ksort($array);
        $str = '';
        $index = 0;
        foreach($array as $key=>$value){
            if($index++ > 0)
                $str .= '&';
            $str.=$key.'='.$value;
        }
        return md5($str);
    }

    public static function subscribe_log($topic,$message)
    {

        if($topic[strlen($topic)-1] == '/')
            $topic = substr($topic,0,strlen($topic)-1);
        $topic_arr = explode('/',$topic);
        $dev_id = $topic_arr[count($topic_arr)-1];

        DB::table('subscribe_log')->insert([
            'topic' => $topic,
            'message' => $message,
            'dev_id' => $dev_id,
            'epoch' => time(),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
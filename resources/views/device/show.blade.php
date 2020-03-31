@include('header')
@include('device.show.script',['list' => $result['list']])
@include('device.show.info')
{{--@include('device.show.list')--}}
@include('bottom')
@include('header')

{{--<?php echo json_encode($result); ?><!--;-->--}}
{{--<?php echo json_encode($result['list']); ?><!--;-->--}}
@include('device.show.script',['dev_id' => $result['dev_id']])
@include('device.show.search')
@include('device.show.list')
@include('bottom')
<div class="card" style="min-height:400px;">
    <div class="card-header">
         设备@{{ list[0].dev_id }} 订阅消息记录
    </div>
    <div class="card-body">
        <table class="table table-hover  table-bordered" ng-show="list!=null" ng-cloak>
            <thead>
                <tr>
                    <th>主题</th>
                    <th>消息</th>
                    <th >接收时间</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="item in list">
                    <td style="vertical-align: inherit">
                        @{{ item.topic }}
                    </td>
                    <td style="vertical-align: inherit">
                        @{{ item.message }}
                    </td>
                    <td style="vertical-align: inherit;" nowrap="nowrap" >
                        @{{ item.created_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
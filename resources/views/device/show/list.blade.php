
    <div class="card-body">
        <table class="table table-hover  table-bordered" ng-show="list!=null" ng-cloak>
            <thead>
            <tr>
                <th>序号</th>
                <th>主题</th>
                <th>消息</th>
                <th >接收时间</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="item in list.data">
                <td style="vertical-align: inherit">
                    @{{ $index + 1  }}
                </td>
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
<div class="float-right">
    <div style="float:right" >
        <ul uib-pagination total-items="list.total" ng-model="list.current_page" items-per-page="list.per_page" ng-change ="setPage()"
            max-size="5" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;" boundary-links="true" force-ellipses="true"></ul>
    </div>
</div>
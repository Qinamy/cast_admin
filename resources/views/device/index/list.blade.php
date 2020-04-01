<div >
    <table class="table table-hover  table-bordered" ng-show="list!=null" ng-cloak>
        <thead>
        <tr>
            <th>账号</th>
            <th>设备号</th>
            <th>详情</th>
        </tr>
        </thead>
        <tbody>
                <tr ng-repeat="item in list.data">
                    <td style="vertical-align: inherit">
                      @{{ item.mobile }}
                    </td>
                    <td style="vertical-align: inherit">
                        @{{ item.id }}
                    </td>
                    <td style="vertical-align: inherit" >
                        <a role="button"  aria-label="Left Align" class="btn-link"
                           ng-click="clickDevice(item)"
                           href="javascript:;">
                            <span>订阅</span>
                        </a>
                    </td>
                </tr>

        </tbody>
    </table>
</div>
<div class="float-right">
    <div style="float:right" >
        <ul uib-pagination total-items="list.total" ng-model="list.current_page" items-per-page="list.per_page" ng-change ="setPage()"
            max-size="5" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;" boundary-links="true" force-ellipses="true"></ul>
    </div>
</div>

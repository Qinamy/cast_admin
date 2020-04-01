<div class="card-header">
        设备@{{ filter.dev_id }} 订阅消息记录
<hr>
    <form class="form-inline" method="get" action="html"  >
        <div class="col-md-1 text-right"><span>主题：</span></div>
        <div class="col-md-2">
            <input type="text" name="topic" class="form-control form-control-sm" ng-model="filter.topic"/>
        </div>

        <div class="w-100 mt-3"></div>
        <div class="status col-md-4 offset-md-1">
        <button type="button" class="btn btn-success btn-sm" ng-click="search()">
            <span ng-show="isLoading == false">查询</span>
            <i class="fa fa-spinner fa-pulse" ng-show="isLoading"></i>
        </button>
        </div>

    </form>
</div>

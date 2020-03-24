<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <script src="{{asset('/js/angular.min.js')}}"></script>
    <script src="{{asset('/js/ui-bootstrap-tpls-3.0.6.min.js')}}"></script>
    <script src="{{asset('/css/bootstrap.min.css')}}"  rel="stylesheet"></script>
    <script src="{{asset('/js/jquery.min.js')}}"></script>

{{--    <script src= "../resources/js/angular.min.js"></script>--}}
{{--    <script src="../resources/js/ui-bootstrap-tpls-3.0.6.min.js"></script>--}}
    <link href="../resources/css/bootstrap.min.css" rel="stylesheet">
{{--    <script src="../resources/js/jquery.min.js"></script>--}}

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
{{--<div class="flex-center position-ref full-height">--}}
{{--    <div class="content">--}}
        <form class="form-inline" method="get" action="html" onsubmit="return ngScope.submit();">
            <div class="col-md-1 text-right"><span>订单编号：</span></div>
            <div class="col-md-2">
                <input type="text" name="order_no" class="form-control form-control-sm" ng-model="filter.order_no"
                />
            </div>

            <div class="w-100 mt-2"></div>

            <div class="status col-md-4 offset-md-1">

                <button type="submit" class="btn btn-success btn-sm">
                    <span ng-show="isLoading == false">查询</span>
                    <i class="fa fa-spinner fa-pulse" ng-show="isLoading"></i>
                </button>
            </div>

        </form>

{{--    </div>--}}
{{--</div>--}}
</body>
</html>

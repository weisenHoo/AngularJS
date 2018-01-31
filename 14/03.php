<?php $data = json_encode(['name' => '后盾网', 'url' => 'http://www.houdunwang.com']); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <script src="../org/angular.min.js"></script>

    <style>
        .ng-cloak {
            display: none;
        }
    </style>
</head>
<body ng-app="hd" ng-cloak class="ng-cloak">

<!--绑定控制器-->
<div ng-controller="ctrl">

    {{data.name}}

</div>

<script>

    // 定义模块
    var m = angular.module('hd', []);

    // 定义控制器
    // 从IOC容器中把$scope这个模型依赖注入到控制器中
    m.controller('ctrl', ['$scope', ($scope) => {
        // viewModel

        // sessionStorage会话的存储
        // localStorage永久存储
        $scope.data = angular.fromJson(<?php echo $data; ?>);// 将json字符串转为对象

    }]);

</script>

</body>
</html>
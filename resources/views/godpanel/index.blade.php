<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/css/vendor/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
    <div class="container" ng-controller="MainCtrl" ng-app="godpanel">
        <div class="row">
            <div class="col-md-12">
                <h1>GodPanel</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Projects</h3>
                <div class="list-container">
                    <ul class="list-group">
                        <li class="list-group-item" ng-show="projects" ng-repeat="project in projects">@{{ project.name }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <h3>People</h3>
                <div class="list-container">
                    <ul class="list-group">
                        <li class="list-group-item" ng-repeat="user in users">@{{ user.first_name }} @{{ user.last_name }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Timeline</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th colspan="30">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="user in users">
                            <td>@{{ user.first_name }} @{{ user.last_name }}</td>
                            <td ng-repeat="i in range(30) track by $index">@{{ $index }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="/js/vendor/moment.min.js"></script>
    <script src="/js/vendor/jquery.min.js"></script>
    <script src="/js/vendor/angular.min.js"></script>
    <script src="/js/controllers/main.js"></script>
</body>
</html>

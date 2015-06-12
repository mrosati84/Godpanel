<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.3.4/css/bootstrap-theme.css">
</head>
<body>
    <div class="container" ng-controller="MainCtrl" ng-app="godpanel">
        <div class="row">
            <div class="col-md-12">
                <h1>Panel</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Projects</h3>
                <ul>
                    <li ng-show="projects" ng-repeat="project in projects">@{{ project.name }}</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>People</h3>
                <ul>
                    <li ng-repeat="user in users">@{{ user.first_name }} @{{ user.last_name }}</li>
                </ul>
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

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="/js/controllers/main.js"></script>
</body>
</html>

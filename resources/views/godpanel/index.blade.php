<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/css/vendor/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>

    <div class="container" ng-controller="MainCtrl" ng-app="godpanel">
        <div class="row">
            <div class="col-md-12">
                <h3>Timeline</h3>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th colspan="41">Activities</th>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="center" colspan="8">{{ $start_date->format('Y-m-d') }}</td>

                            @for ($i = 0; $i < $days; $i++)
                            <td align="center" colspan="8">{{ date_add($start_date, date_interval_create_from_date_string('1 days'))->format('Y-m-d') }}</td>
                            @endfor
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3">Matteo Rosati</td>
                            <td>Telecom</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Alessi</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>TIM</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="4">Maurizio Fiaschini</td>
                            <td>Vespa</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Moto Guzzi</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Versace</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>H-ART</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                            <td class="activity">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group">
                    <a class="btn btn-default" href="?start_date={{ date_add($start_date, date_interval_create_from_date_string('-9 day'))->format('Y-m-d') }}&end_date={{ date_add($start_date, date_interval_create_from_date_string('4 days'))->format('Y-m-d') }}"><i class="glyphicon glyphicon-chevron-left"></i> Presvous week</a>
                    <a class="btn btn-default" href="?start_date={{ date_add($start_date, date_interval_create_from_date_string('6 days'))->format('Y-m-d') }}&end_date={{ date_add($start_date, date_interval_create_from_date_string('4 days'))->format('Y-m-d') }}">Next week <i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/vendor/moment.min.js"></script>
    <script src="/js/vendor/jquery.min.js"></script>
    <script src="/js/vendor/angular.min.js"></script>
    <script src="/js/controllers/main.js"></script>
</body>
</html>

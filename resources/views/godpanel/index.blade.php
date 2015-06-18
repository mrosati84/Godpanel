<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Timeline View Demo - dhtmlxScheduler</title>
    <meta name="token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/css/vendor/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/codebase/dhtmlxscheduler_flat.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="btn-group nav-buttons">
        <button class="btn btn-default change-timeline-length" data-action="minus"><i class="glyphicon glyphicon-minus"></i></button>
        <button class="btn btn-default change-timeline-length" data-action="plus"><i class="glyphicon glyphicon-plus"></i></button>
        <button class="btn btn-default change-timeline-length" data-action="month">Month</button>
        <button class="btn btn-default change-timeline-length" data-action="week">Week</button>
        <button class="btn btn-default change-timeline-length" data-action="day">Day</button>
    </div>
    <div id="scheduler_here" class="dhx_cal_container">
        <div class="dhx_cal_navline">
            <div class="dhx_cal_prev_button">&nbsp;</div>
            <div class="dhx_cal_next_button">&nbsp;</div>
            <div class="dhx_cal_today_button"></div>
            <div class="dhx_cal_date"></div>
        </div>
        <div class="dhx_cal_header"></div>
        <div class="dhx_cal_data"></div>
    </div>

    <script src="/js/vendor/zepto.min.js"></script>
    <script src="/js/vendor/velocity.min.js"></script>
    <script src='/codebase/dhtmlxscheduler.js' type="text/javascript" charset="utf-8"></script>
    <script src='/codebase/ext/dhtmlxscheduler_timeline.js' type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>

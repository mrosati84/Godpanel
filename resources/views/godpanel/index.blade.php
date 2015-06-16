<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Timeline View Demo - dhtmlxScheduler</title>
    <meta name="token" content="{{ csrf_token() }}">

    <link rel='stylesheet' type='text/css' href='/codebase/dhtmlxscheduler_flat.css'>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
</head>
<body>
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

    <script src="/js/vendor/jquery.min.js"></script>
    <script src='/codebase/dhtmlxscheduler.js' type="text/javascript" charset="utf-8"></script>
    <script src='/codebase/ext/dhtmlxscheduler_timeline.js' type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>

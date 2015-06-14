<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Timeline View Demo - dhtmlxScheduler</title>

	<link rel='stylesheet' type='text/css' href='/codebase/dhtmlxscheduler_flat.css'>

	<script src='/codebase/dhtmlxscheduler.js?v=4.1' type="text/javascript" charset="utf-8"></script>
	<script src='/codebase/ext/dhtmlxscheduler_timeline.js?v=4.1' type="text/javascript" charset="utf-8"></script>

	<style type="text/css" media="screen">
		html, body{
			margin: 0;
			padding: 0;
			height: 100%;
			overflow: hidden;
		}
		.dhx_cal_container {
			width: 100%;
			height: 100%;
		}
	</style>
</head>

<script type="text/javascript" charset="utf-8">
	function init() {

		scheduler.locale.labels.timeline_tab = "Timeline"
		scheduler.locale.labels.section_custom = "Section";
		scheduler.config.fix_tab_position = false;
		scheduler.config.details_on_create = true;
		scheduler.config.details_on_dblclick = true;
		scheduler.config.xml_date = "%Y-%m-%d %H:%i";

		scheduler.config.first_hour = 6
		scheduler.config.last_hour = 23

		var sections = [
			{ key: 1, label: "James Smith" },
			{ key: 2, label: "John Williams" },
			{ key: 3, label: "David Miller" },
			{ key: 4, label: "Linda Brown" }
		];

		scheduler.createTimelineView({
			name: "timeline",
			x_unit: "minute",
			x_date: "%H:%i",
			x_step: 60,
			x_size: 12,
			x_start: 8,
			x_length: 24,
			y_unit: sections,
			y_property: "section_id",
			render: "bar"
		});

		//===============
		//  Data loading
		//===============
		scheduler.config.lightbox.sections = [
			{ name: "description", height: 130, map_to: "text", type: "textarea" , focus: true},
			{ name: "custom", height: 23, type: "select", options: sections, map_to: "section_id" },
			{ name: "time", height: 72, type: "time", map_to: "auto"}
		]

		scheduler.init('scheduler_here',new Date(2012,7,30),"timeline");
		scheduler.parse([
			{ start_date: "2012-08-30 09:00", end_date: "2012-08-30 12:00", text: "Task A-12458", section_id: 1 },
			{ start_date: "2012-08-30 10:00", end_date: "2012-08-30 16:00", text: "Task A-89411", section_id: 1 },
			{ start_date: "2012-08-30 10:00", end_date: "2012-08-30 14:00", text: "Task A-64168", section_id: 1 },
			{ start_date: "2012-08-30 16:00", end_date: "2012-08-30 17:00", text: "Task A-46598", section_id: 1 },

			{ start_date: "2012-08-30 12:00", end_date: "2012-08-30 20:00", text: "Task B-48865", section_id: 2 },
			{ start_date: "2012-08-30 14:00", end_date: "2012-08-30 16:00", text: "Task B-44864", section_id: 2 },
			{ start_date: "2012-08-30 16:30", end_date: "2012-08-30 18:00", text: "Task B-46558", section_id: 2 },
			{ start_date: "2012-08-30 18:30", end_date: "2012-08-30 20:00", text: "Task B-45564", section_id: 2 },

			{ start_date: "2012-08-30 08:00", end_date: "2012-08-30 12:00", text: "Task C-32421", section_id: 3 },
			{ start_date: "2012-08-30 14:30", end_date: "2012-08-30 16:45", text: "Task C-14244", section_id: 3 },

			{ start_date: "2012-08-30 09:20", end_date: "2012-08-30 12:20", text: "Task D-52688", section_id: 4 },
			{ start_date: "2012-08-30 11:40", end_date: "2012-08-30 16:30", text: "Task D-46588", section_id: 4 },
			{ start_date: "2012-08-30 12:00", end_date: "2012-08-30 18:00", text: "Task D-12458", section_id: 4 }
		], "json");
	}
</script>

<body onload="init();">
	<div id="scheduler_here" class="dhx_cal_container">
		<div class="dhx_cal_navline">
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>
			<div class="dhx_cal_tab" name="day_tab" style="left:30px;"></div>
			<div class="dhx_cal_tab" name="timeline_tab" style="left:105px;"></div>
		</div>
		<div class="dhx_cal_header">
		</div>
		<div class="dhx_cal_data">
		</div>
	</div>
</body>
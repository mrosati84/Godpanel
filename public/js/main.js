// define some constants
var DAY = 1,
    WEEK = 7,
    MONTH = 30;

// set the initial x_size and x_length values
var x_size = WEEK,
	x_length = WEEK;

function init (users, projects, activities) {

	scheduler.locale.labels.timeline_tab = "Timeline"

	scheduler.locale.labels.section_users = "User";
	scheduler.locale.labels.section_projects = "Project";
	scheduler.locale.labels.section_description = "Notes";

	scheduler.config.fix_tab_position = false;
	scheduler.config.details_on_create = true;
	scheduler.config.details_on_dblclick = true;
	scheduler.config.xml_date = "%Y-%m-%d %H:%i";
	scheduler.config.time_step = 60;

	var week_options = {
		name: "timeline",
		first_hour: 9,
		last_hour: 17,
		x_unit: "day",
		x_date: "%d %F",
		x_size: x_size,
		x_start: 0,
		x_length: x_length,
		y_unit: users,
		y_property: "user_id",
		render: "bar"
	}

	scheduler.createTimelineView(week_options);

	// set the scheduler event window sections
	scheduler.config.lightbox.sections = [
		{ name: "description", height: 130, type: "textarea",					 map_to: "description",	  focus: true },
		{ name: "users",	   height: 23,  type: "select",	options: users,	map_to: "user_id"					   },
		{ name: "projects",	height: 23,  type: "select",	options: projects, map_to: 'project_id'					},
		{ name: "time",		height: 72,  type: "time",						 map_to: "auto"						  }
	]

	scheduler.init('scheduler_here', new Date(), "timeline");

	// set the event label in timeline view
	scheduler.templates.event_bar_text = function (start, end, ev) {
		for (var i = 0; i < projects.length; i++) {
			if (parseInt(projects[i].key) === parseInt(ev.project_id)) {
				return projects[i]['label'] + ' / ' + ev.description;
			}
		}
	};

	scheduler.parse(activities, "json");

	/**
	 * [convertToDateTime description]
	 * @param  {Date} date an input date
	 * @return {String}	formatted date
	 */
	convertToDateTime = function (date) {
		var year = date.getFullYear(),
			month = (date.getMonth() + 1 < 10) ? '0' + (date.getMonth() + 1) : date.getMonth() + 1,
			day = date.getDate(),
			hours = (date.getHours() < 10) ? '0' + date.getHours() : date.getHours(),
			minutes = (date.getMinutes() < 10) ? '0' + date.getMinutes() : date.getMinutes(),
			seconds = (date.getSeconds() < 10) ? '0' + date.getSeconds() : date.getSeconds();

		return year+'-'+month+'-'+day+' '+hours+':'+minutes+':'+seconds;
	}

	// ************************
	// SCHEDULER EVENT HANDLING
	// ************************

	// Save an event
	scheduler.attachEvent("onEventSave", function(id, ev, is_new) {
		var start_date = ev.start_date,
			end_date = ev.end_date;

		var url = (is_new) ? '/api/v1/activities' : '/api/v1/activities/' + id + '/edit';

		$.post(url, {
			'description': ev.description,
			'user_id': ev.user_id,
			'project_id': ev.project_id,
			'start_date': convertToDateTime(ev.start_date),
			'end_date': convertToDateTime(ev.end_date),
		}, function (response) {
			// set the new event's id
			if (is_new) {
				scheduler.changeEventId(id, response.id);
			}
		});

		return true;
	});

	// Change an event
	scheduler.attachEvent("onEventChanged", function (id, ev) {
		$.post('/api/v1/activities/' + id + '/edit', {
			'description': ev.description,
			'user_id': ev.user_id,
			'project_id': ev.project_id,
			'start_date': convertToDateTime(ev.start_date),
			'end_date': convertToDateTime(ev.end_date),
		}, function (response) {
		});
	});

	// Delete an event
	scheduler.attachEvent("onEventDeleted", function (id){
		if (id) {
			$.post('/api/v1/activities/' + id + '/delete', {}, function (response) {});
		}
	});
}

// Bootstrap the application
$.get('/api/v1/scheduler/users', {}, function (users) {
	$.get('/api/v1/scheduler/projects', {}, function (projects) {
		$.get('/api/v1/scheduler/activities', {}, function (activities) {
			init(users, projects, activities);
		});
	});
});

// handle buttons to change scheduler time
$('.change-timeline-length').on('click', function () {
	var action = $(this).data('action');

	switch (action) {
		case 'plus':
		if (x_size > DAY && x_length > DAY) {
			x_size--;
			x_length--;
		}
		break;

		case 'minus':
		x_size++;
		x_length++;
		break;

		case 'month':
		x_size = MONTH;
		x_length = MONTH;
		break;

		case 'week':
		x_size = WEEK;
		x_length = WEEK;
		break;

		case 'day':
		x_size = DAY;
		x_length = DAY;
		break;
	}

	// update scheduler options
	scheduler.matrix['timeline'].x_size = x_size;
	scheduler.matrix['timeline'].x_length = x_length;

	// refresh the scheduler view
	scheduler.setCurrentView();
});

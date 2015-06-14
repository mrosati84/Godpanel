<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

	protected $table = 'activities';

	protected $fillable = ['description', 'user_id', 'project_id', 'start_date', 'end_date'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function project()
	{
		return $this->belongsTo('App\Project');
	}

}

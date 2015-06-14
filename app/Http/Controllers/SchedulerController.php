<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use App\Activity;
use DB;

class SchedulerController extends Controller {

	public function users(Request $request)
	{

		return DB::table('users')
			->select('id as key')
			->addSelect(DB::raw('CONCAT_WS(\' \', first_name, last_name) AS label'))
			->orderBy('last_name')
			->get();
	}

	public function projects()
	{
		return DB::table('projects')
			->select('id as key')
			->addSelect('name as label')
			->orderBy('name')
			->get();
	}

	public function activities()
	{
		return DB::table('activities')
			->join('projects', 'activities.project_id', '=', 'projects.id')
			->join('users', 'activities.user_id', '=', 'users.id')
			->select('activities.id')
			->addSelect('users.id as user_id')
			->addSelect('projects.id as project_id')
			->addSelect('start_date')
			->addSelect('end_date')
			->addSelect('description')
			->get();
	}

}

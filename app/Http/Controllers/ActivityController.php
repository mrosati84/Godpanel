<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Activity;

class ActivityController extends Controller {

	public function store(Request $request)
	{
		$activity = Activity::create($request->all());

		return response()->json(['id' => $activity->id], 200);
	}

	public function update (Request $request, $id)
	{
		$activity = Activity::find($id);

		$activity->description = $request->get('description');
		$activity->start_date = $request->get('start_date');
		$activity->end_date = $request->get('end_date');
		$activity->user_id = $request->get('user_id');
		$activity->project_id = $request->get('project_id');

		$activity->save();

		return response()->json(null, 200);
	}

	public function destroy($id)
	{
		Activity::destroy($id);

		return response()->json(null, 200);
	}

}

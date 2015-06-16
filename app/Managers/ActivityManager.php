<?php

namespace App\Managers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityManager {

    /**
     * Create a new activity and return its id
     * @param  Request $request the HTTP request
     * @return int              the newly created activity's id
     */
    public function createActivity(Request $request)
    {
        $activity = Activity::create($request->all());

        return $activity->id;
    }

    /**
     * Update an existing activity
     * @param  Request $request the HTTP request
     * @param  int     $id      the id of the activity to edit
     * @return bool             true if the activity is saved
     */
    public function updateActivity(Request $request, $id)
    {
        $activity = Activity::find($id);

        $activity->description = $request->get('description');
        $activity->start_date = $request->get('start_date');
        $activity->end_date = $request->get('end_date');
        $activity->user_id = $request->get('user_id');
        $activity->project_id = $request->get('project_id');

        return $activity->save();
    }

}

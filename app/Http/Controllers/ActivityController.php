<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Activity;
use App\Managers\ActivityManager;

class ActivityController extends Controller
{
    public function store(Request $request, ActivityManager $manager)
    {
        $id = $manager->createActivity($request);

        return response()->json(['id' => $id], 200);
    }

    public function update(Request $request, ActivityManager $manager, $id)
    {
        $manager->updateActivity($request, $id);

        return response()->json(null, 200);
    }

    public function destroy($id)
    {
        Activity::destroy($id);

        return response()->json(null, 200);
    }

}

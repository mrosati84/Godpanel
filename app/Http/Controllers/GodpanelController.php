<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DateTime;

class GodpanelController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$start_date = new DateTime($request->get('start_date'));
		$end_date = new DateTime($request->get('end_date'));

		return view('godpanel/index', [
			'start_date' => $start_date,
			'end_date' => $end_date,
			'days' => date_diff($end_date, $start_date)->days
		]);
	}

}

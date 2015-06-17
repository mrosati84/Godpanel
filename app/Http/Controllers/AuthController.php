<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

	public function index()
	{
		if (Auth::check()) {
			return redirect()->route('godpanel.index');
		}

		return view('auth/index');
	}

	public function login(Request $request)
	{
		if (Auth::check()) {
			return redirect()->route('godpanel.index');
		}

		$email = $request->get('email');
		$password = $request->get('password');

		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			$user = User::where('email', '=', $email)->first();
			Auth::login($user);

			return redirect()->route('godpanel.index');
		} else {
			return redirect()
				->back()
				->with('email', $email)
				->with('login_error', 'Wrong email or password');
		}
	}

	public function logout()
	{
		Auth::logout();

		return redirect()->route('godpanel.index');
	}

}

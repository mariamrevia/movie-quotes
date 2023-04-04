<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
	public function create(): View
	{
		return view('sessions.login');
	}
}

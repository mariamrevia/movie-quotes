<?php

namespace App\Http\Controllers\sessions;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function create(): View
	{
		return view('sessions.login');
	}

	public function store(loginRequest $request): RedirectResponse
	{
		$attributes = $request->validated();

		if (!auth()->attempt($attributes))
		{
			throw ValidationException::withMessages([
				'email'=> 'your provieded credentials could not be verified',
			]);
		}

		session()->regenerate();
		return redirect('/');
	}
}

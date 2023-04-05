<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
	public function store(MovieRequest $request): RedirectResponse
	{
		$movieAttributes = $request->validated();

		Movie::create($movieAttributes);
		return redirect()->route('home');
	}
}

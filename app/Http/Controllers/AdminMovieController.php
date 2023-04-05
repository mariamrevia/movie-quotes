<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;

class AdminMovieController extends Controller
{
	public function store(AdminMovieRequest $request): RedirectResponse
	{
		$movieAttributes = $request->validated();

		Movie::create($movieAttributes);
		return redirect()->route('home');
	}
}

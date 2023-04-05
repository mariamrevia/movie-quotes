<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
	public function index()
	{
		return view('admin.allmovies', [
			'movies' => Movie::all(),
		]);
	}

	public function edit(Movie $movie)
	{
		return view('admin.movie.edit', [
			'movie' => $movie,
		]);
	}

	public function store(MovieRequest $request): RedirectResponse
	{
		$movieAttributes = $request->validated();

		Movie::create($movieAttributes);
		return redirect()->route('home');
	}
}

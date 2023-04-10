<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class MovieController extends Controller
{
	public function show(): View
	{
		return view('admin.movies', [
			'movies' => Movie::latest()->simplePaginate(8),
		]);
	}

	public function edit(Movie $movie): View
	{
		return view('admin.movie.edit', [
			'movie' => $movie,
		]);
	}

	public function update(MovieRequest $request, Movie $movie): RedirectResponse
	{
		$movieAttributes = $request->validated();

		$movie->update($movieAttributes);
		return redirect()->route('movies.show_all');
	}

	public function store(MovieRequest $request): RedirectResponse
	{
		$movieAttributes = $request->validated();

		Movie::create($movieAttributes);
		return redirect()->route('dashboard.show');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return redirect()->route('movies.show_all');
	}
}

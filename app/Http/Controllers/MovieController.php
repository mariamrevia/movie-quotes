<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Contracts\View\View;

class MovieController extends Controller
{
	public function showMovie(Movie $movie): View
	{
		return view('showMovie', [
			'movie' => $movie,
		]);
	}
}

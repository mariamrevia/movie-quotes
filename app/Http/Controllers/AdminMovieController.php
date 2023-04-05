<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function store()
	{
		$movieAttributes = request()->validate([
			'title' => 'required|unique:movies,title',
		]);

		Movie::create($movieAttributes);
		return redirect()->route('admin/movies');
	}
}

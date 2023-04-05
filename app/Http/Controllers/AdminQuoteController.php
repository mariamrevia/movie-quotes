<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class AdminQuoteController extends Controller
{
	public function create()
	{
		return view('admin.quote.createquote', [
			'movies' => Movie::all(),
		]);
	}

	public function store(AdminQuoteRequest $request)
	{
		$quoteAttributes = $request->validated() +
		[
			'image' => request()->file('image')->store('images'),
		];

		Quote::create($quoteAttributes);
		return redirect()->route('home');
	}
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\QuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class QuoteController extends Controller
{
	public function showQuotes(): View
	{
		return view('admin.allquotes', [
			'quotes'=> Quote::all(),
		]);
	}

	public function edit(Quote $quote): View
	{
		return view('admin.quote.edit', [
			'quote'=> $quote,
		]);
	}

	public function create(): View
	{
		return view('admin.quote.createquote', [
			'movies' => Movie::all(),
		]);
	}

	public function store(QuoteRequest $request): RedirectResponse
	{
		$quoteAttributes = $request->validated() +
		[
			'image' => $request->file('image')->store('images'),
		];

		Quote::create($quoteAttributes);
		return redirect()->route('home');
	}
}

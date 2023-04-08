<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\QuoteRequest;
use App\Http\Requests\Admin\UpDateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class QuoteController extends Controller
{
	public function showQuotes(): View
	{
		return view('admin.allquotes', [
			'quotes'=> Quote::paginate(8),
		]);
	}

	public function edit(Quote $quote): View
	{
		return view('admin.quote.edit', [
			'quote' => $quote,
			'movies'=> Movie::all(),
		]);
	}

	public function update(UpDateQuoteRequest $request, Quote $quote): RedirectResponse
	{
		$quoteAttributes = $request->validated();

		if ($request->hasFile('image'))
		{
			Storage::delete($quote->image);
			$quoteAttributes['image'] = $request->file('image')->store('images');
			$quote->setAttribute('image', $quoteAttributes['image']);
		}

		$quote->update($quoteAttributes);
		return redirect()->route('quotes.show_all');
	}

	public function create(): View
	{
		return view('admin.quote.createquote', [
			'movies' => Movie::all(),
		]);
	}

	public function store(QuoteRequest $request): RedirectResponse
	{
		// $quoteAttributes = $request->validated() +
		// [
		// 	'image' => $request->file('image')->store('images'),
		// ];

		Quote::create([...$request->validated(), 'image' => $request->file('image')->store('images')]);
		return redirect()->route('dashboard.show');
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		$quote->delete();
		return redirect()->route('quotes.show_all');
	}
}

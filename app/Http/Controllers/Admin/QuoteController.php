<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreQuoteRequest;
use App\Http\Requests\Admin\UpDateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class QuoteController extends Controller
{
	public function show(): View
	{
		return view('admin.quotes', [
			'quotes'=> Quote::latest()->simplePaginate(8),
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

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		Quote::create([...$request->validated(), 'image' => $request->file('image')->store('images')]);
		return redirect()->route('dashboard.show');
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		$quote->delete();
		return redirect()->route('quotes.show_all');
	}
}

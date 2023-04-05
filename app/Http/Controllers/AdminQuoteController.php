<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminQuoteRequest;
use App\Models\Quote;

class AdminQuoteController extends Controller
{
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

<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
{
	public function get()
	{
		$randomQuote = Quote::inRandomOrder()->first();
		return view('landingpage', [
			'quote' => $randomQuote,
		]);
	}
}

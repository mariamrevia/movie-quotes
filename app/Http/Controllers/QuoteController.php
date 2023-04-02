<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
{
	public function index()
	{
		$randomQuote = Quote::inRandomOrder()->first();
		return view('landingpage', [
			'quote' => $randomQuote,
		]);
	}
}

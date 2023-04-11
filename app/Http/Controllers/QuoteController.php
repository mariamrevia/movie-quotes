<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Contracts\View\View;

class QuoteController extends Controller
{
	public function randomQoute(): View
	{
		$randomQuote = Quote::inRandomOrder()->first();
		return view('landing', [
			'quote' => $randomQuote,
		]);
	}
}

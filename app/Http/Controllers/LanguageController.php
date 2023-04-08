<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
	public function switch(Request $request)
	{
		$locale = $request->input('locale');

		session()->put('locale', $locale);
		app()->setLocale($locale);
		return redirect()->back();
	}
}

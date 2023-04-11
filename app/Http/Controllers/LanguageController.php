<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
	public function switchLanguage($locale): RedirectResponse
	{
		session()->put('locale', $locale);
		app()->setLocale($locale);
		return back();
	}
}

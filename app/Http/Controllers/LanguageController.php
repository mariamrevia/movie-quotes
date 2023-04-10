<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
	public function switch($locale)
	{
		session()->put('locale', $locale);
		app()->setLocale($locale);
		return back();
	}
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\sessions\AuthController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\Admin\QuoteController as AdminQuoteController;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [QuoteController::class, 'randomQoute'])->name('home');
Route::get('movies/{movie}', [MovieController::class, 'showMovie'])->name('movie.show');

Route::get('/languages/{switch}', [LanguageController::class, 'switchLanguage'])->name('languages.switch');

Route::prefix('admin')->middleware('admin')->group(function () {
	Route::controller(AdminMovieController::class)->group(function () {
		Route::view('movies/create', 'admin.movie.create')->name('movies.create');
		Route::post('movies', 'store')->name('movies.store');
		Route::get('movies', 'show')->name('movies.show_all');

		Route::get('movies/{movie}/edit', 'edit')->name('movie.edit');
		Route::patch('movies/{movie}', 'update')->name('movie.update');
		Route::delete('movies/{movie}', 'destroy')->name('movie.destroy');
		Route::view('dashboard', 'admin.dashboard')->name('dashboard.show');
	});

	Route::controller(AdminQuoteController::class)->group(function () {
		Route::get('quotes/create', 'create')->name('quotes.create');
		Route::post('quotes', 'store')->name('quotes.store');

		Route::get('quotes', 'show')->name('quotes.show_all');
		Route::get('quotes/{quote}/edit', 'edit')->name('quote.edit');
		Route::patch('quotes/{quote}', 'update')->name('quote.update');
		Route::delete('quotes/{quote}', 'destroy')->name('quote.destroy');
	});
});

Route::view('login', 'sessions.login')->name('login.view');
Route::post('login', [AuthController::class, 'store'])->name('login.store');

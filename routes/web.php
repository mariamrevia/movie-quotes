<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\sessions\AuthController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\Admin\QuoteController as AdminQuoteController;

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

Route::middleware('admin')->group(function () {
	Route::view('admin/movies/create', 'admin.movie.createmovie')->name('movies.create');
	Route::post('admin/movies', [AdminMovieController::class, 'store'])->name('movies.store');
	Route::get('admin/movies', [AdminMovieController::class, 'index'])->name('movies.show_all');
	Route::get('admin/movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('movie.edit');

	Route::view('admin/dashboard', 'admin.dashboard')->name('dashboard.show');

	Route::get('admin/quotes/create', [AdminQuoteController::class, 'create'])->name('quotes.create');
	Route::post('admin/quotes', [AdminQuoteController::class, 'store'])->name('quotes.store');
});

Route::view('login', 'sessions.login')->name('login.view');
Route::post('login', [AuthController::class, 'store'])->name('login.store');

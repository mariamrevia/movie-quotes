<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\sessions\AuthController;

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

Route::view('login', 'sessions.login')->name('login.view');
Route::post('login', [AuthController::class, 'store'])->name('login.store');

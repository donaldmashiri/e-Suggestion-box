<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('suggestions', \App\Http\Controllers\SuggestionController::class);
    Route::resource('feedbacks', \App\Http\Controllers\FeedbackController::class);
    Route::resource('users', \App\Http\Controllers\UsersController::class);
});

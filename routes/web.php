<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ExploreController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\TweetController::class, 'index'])->name('home');
Route::post('/tweets', [App\Http\Controllers\TweetController::class, 'store'])->name('tweets');
Route::post('/profiles/{user:username}/follow', [App\Http\Controllers\FollowController::class, 'store'])->name('follow');
Route::post('/profiles/{user:username}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('edit');
Route::get('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');
Route::patch('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('update');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'], 'logout')->name('logout');

Route::get('/explore', [App\Http\Controllers\ExploreController::class, 'index'])->name('explore');

Route::fallback(function () {
    return view('/welcome');
});

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\SocialiteController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/{provider}/redirect', [SocialiteController::class, 'redirect'])->name('social.redirect');
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'callback'])->name('social.callback');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/careers', function () {
    return view('pages.careers');
});

Route::get('/courses', function () {
    return view('pages.courses');
});

Route::get('/mentorship', function () {
    return view('pages.mentorship');
});


Route::get('/companies', function () {
    return view('pages.companies');
});


Route::get('/marketplace', function () {
    return view('pages.marketplace');
});

Route::get('/sponsorship', function () {
    return view('pages.sponsorship');
});


Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

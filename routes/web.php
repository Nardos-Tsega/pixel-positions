<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PhoneVerificationController;
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
//
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/registration-complete', [PhoneVerificationController::class, 'create'])->name('registration.complete');
// Route::post('/verify-otp', function(Request $request) {
//     \Log::info('Request received:', $request->all());
//     return response()->json(['message' => 'Request received']);
// });
Route::post('/verify-otp', [PhoneVerificationController::class, 'store'])->name('verify.otp');
// Route::post('/verify-otp', [PhoneVerificationController::class, 'store'])->middleware('auth:api')->name('verify.otp');

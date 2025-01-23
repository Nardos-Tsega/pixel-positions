<?php

use App\Http\Controllers\Auth\RegisterController;

// routes/api.php
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

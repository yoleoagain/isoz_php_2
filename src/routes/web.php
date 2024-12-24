<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/register", function () {
    return view("register");
});

Route::post('/register', [RegistrationController::class, 'register']);

<?php

use Illuminate\Support\Facades\Route;
use App\Features\Auth\Login\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('auth/login', LoginController::class);

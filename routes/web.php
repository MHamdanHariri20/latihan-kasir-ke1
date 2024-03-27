<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/landing', [userController::class, 'landing'])->name('landing');

Route::get('/login', [userController::class, 'login'])->name('login');

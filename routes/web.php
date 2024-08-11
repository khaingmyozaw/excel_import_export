<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::post('/users/import', [UserController::class, 'import']);
Route::get('/users/export', [UserController::class, 'export']);

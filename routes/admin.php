<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\api\Admin\AdminController;

Route::post('/login', [AdminController::class, 'login']);

Route::middleware(['auth:sanctum','admin'])->group(function () {
    // Route::get('/dashboard', [AdminController::class, 'dashboard']);
});

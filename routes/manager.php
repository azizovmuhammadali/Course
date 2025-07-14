<?php

use App\Http\Controllers\V1\api\Manager\ManagerController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [ManagerController::class, 'login']);

Route::middleware(['auth:sanctum','manager'])->group(function () {
});

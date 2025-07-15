<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\api\Manager\ManagerController;
use App\Http\Controllers\V1\api\Manager\CourseListController;

Route::post('/login', [ManagerController::class, 'login']);

Route::middleware(['auth:sanctum','manager'])->group(function () {
    Route::apiResource('courses',CourseListController::class);
});

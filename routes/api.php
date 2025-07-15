<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
    Route::prefix('admin')->group(function () {
        require __DIR__.'/admin.php';   
    });

    Route::prefix('manager')->group(function () {
        require __DIR__.'/manager.php';    
    });

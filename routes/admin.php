<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\api\Admin\AdminController;

Route::get('/login', [AdminController::class, 'loginBlade'])->name('admin.login');
Route::middleware('admin')->group(function(){

});
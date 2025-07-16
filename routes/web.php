<?php

use App\Http\Controllers\V1\api\Admin\AdminController;
use App\Http\Controllers\V1\api\Manager\CourseListController;
use App\Http\Controllers\V1\api\Manager\ManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
          require __DIR__.'/admin.php';   
});
Route::prefix('manager')->group(function () {
   require __DIR__.'/manager.php';  
});
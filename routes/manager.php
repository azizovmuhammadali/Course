<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\api\Manager\ManagerController;
use App\Http\Controllers\V1\api\Manager\CourseListController;

 Route::get('/login', [ManagerController::class, 'loginBlade'])->name('manager.login');
    Route::post('/login', [ManagerController::class, 'login'])->name('manager.login.submit');
    Route::get('index',[CourseListController::class,'indexBlade'])->name('manager.courses');
    Route::get('create',[CourseListController::class,'create'])->name('manager.courses.create');
    Route::post('store',[CourseListController::class,'store'])->name('manager.courses.store');
    Route::get('show/{id}',[CourseListController::class,'showBlade'])->name('manager.courses.show');
    Route::get('update/{id}',[CourseListController::class,'updateBlade'])->name('manager.courses.update');
    Route::post('updatecorse/{id}',[CourseListController::class,'update'])->name('manager.courses.updated');
    Route::delete('delete/{id}',[CourseListController::class,'destroy'])->name('manager.courses.delete');

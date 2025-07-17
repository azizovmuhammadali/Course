<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\api\Manager\ManagerController;
use App\Http\Controllers\V1\api\Manager\CourseListController;
use App\Http\Controllers\V1\api\Manager\TeacherController;

Route::get('/login', [ManagerController::class, 'loginBlade'])->name('login');   
    Route::post('/login', [ManagerController::class, 'login'])->name('manager.login.submit');
Route::middleware(['auth','manager'])->group(function(){
 Route::get('index',[CourseListController::class,'indexBlade'])->name('manager.courses');
    Route::get('create',[CourseListController::class,'create'])->name('manager.courses.create');
    Route::post('store',[CourseListController::class,'store'])->name('manager.courses.store');
    Route::get('show/{id}',[CourseListController::class,'showBlade'])->name('manager.courses.show');
    Route::get('update/{id}',[CourseListController::class,'updateBlade'])->name('manager.courses.update');
    Route::post('updatecorse/{id}',[CourseListController::class,'update'])->name('manager.courses.updated');
    Route::delete('delete/{id}',[CourseListController::class,'destroy'])->name('manager.courses.delete');
    Route::get('teachers/index',[TeacherController::class,'index'])->name('manager.teachers');
    Route::get('teachers/create',[TeacherController::class,'create'])->name('manager.teachers.create');
    Route::post('teachers/store',[TeacherController::class,'store'])->name('teachers.store');
    Route::get('teachers/show/{id}',[TeacherController::class,'show'])->name('manager.teachers.show');
    Route::get('teachers/updated/{id}',[TeacherController::class,'updated'])->name('manager.teachers.edit');
    Route::post('teachers/update/{id}',[TeacherController::class,'update'])->name('teachers.update');
    Route::delete('teachers/delete/{id}',[TeacherController::class,'destroy'])->name('manager.teachers.destroy');
});
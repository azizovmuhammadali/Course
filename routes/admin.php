<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\api\Admin\AdminController;
use App\Http\Controllers\V1\api\Admin\StudentController;

Route::get('/login', [AdminController::class, 'loginBlade'])->name('admin.login');
Route::post('loginForm',[AdminController::class,'login'])->name('admins.login');
Route::middleware('admin')->group(function(){
  Route::get('students/index',[StudentController::class,'index'])->name('students');
  Route::get('students/create',[StudentController::class,'create'])->name('students.create');
  Route::post('students/store',[StudentController::class,'store'])->name('students.store');
  Route::get('students/show/{id}',[StudentController::class,'show'])->name('students.show');
  Route::get('students/update/{id}',[StudentController::class,'updated'])->name('students.update');
  Route::put('students/edit/{id}',[StudentController::class,'update'])->name('students.edit');
  Route::delete('students/delete/{id}',[StudentController::class,'destroy'])->name('students.delete');
});
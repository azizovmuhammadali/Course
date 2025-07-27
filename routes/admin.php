<?php

use App\Http\Controllers\V1\api\Admin\ActiveStudentController;
use App\Http\Controllers\V1\api\Admin\CourseStudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\api\Admin\AdminController;
use App\Http\Controllers\V1\api\Admin\PaymentController;
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
 Route::get('payments/index', [PaymentController::class, 'index'])->name('payments.index');
Route::get('payments/create', [PaymentController::class, 'create'])->name('payments.create');
Route::post('payments/store', [PaymentController::class, 'store'])->name('payments.store');
Route::get('payments/show/{id}', [PaymentController::class, 'show'])->name('payments.show');
Route::get('payments/edit/{id}', [PaymentController::class, 'edit'])->name('payments.edit');
Route::put('payments/update/{id}', [PaymentController::class, 'update'])->name('payments.update');
Route::delete('payments/delete/{id}', [PaymentController::class, 'destroy'])->name('payments.delete');
 Route::get('coursestudents/index', [CourseStudentController::class, 'index'])->name('coursestudents.index');
Route::get('coursestudents/create', [CourseStudentController::class, 'create'])->name('coursestudents.create');
Route::post('coursestudents/store', [CourseStudentController::class, 'store'])->name('coursestudents.store');
Route::get('coursestudents/show/{id}', [CourseStudentController::class, 'show'])->name('coursestudents.show');
Route::get('coursestudents/edit/{id}', [CourseStudentController::class, 'edit'])->name('coursestudents.edit');
Route::put('coursestudents/update/{id}', [CourseStudentController::class, 'update'])->name('coursestudents.update');
Route::delete('coursestudents/delete/{id}', [CourseStudentController::class, 'destroy'])->name('coursestudents.delete');
 Route::get('activestudents/index', [ActiveStudentController::class, 'index'])->name('activestudents.index');
Route::get('activestudents/create', [ActiveStudentController::class, 'create'])->name('activestudents.create');
Route::post('activestudents/store', [ActiveStudentController::class, 'store'])->name('activestudents.store');
Route::get('activestudents/show/{id}', [ActiveStudentController::class, 'show'])->name('activestudents.show');
Route::get('activestudents/edit/{id}', [ActiveStudentController::class, 'edit'])->name('activestudents.edit');
Route::put('activestudents/update/{id}', [ActiveStudentController::class, 'update'])->name('activestudents.update');
Route::delete('activestudents/delete/{id}', [ActiveStudentController::class, 'destroy'])->name('activestudents.delete');
});
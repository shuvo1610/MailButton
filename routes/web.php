<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/',[TeacherController::class,'create'])->name('teacher.registration');
Route::post('teacher-store',[TeacherController::class,'store'])->name('teacher.store');

Route::get('teacher-index',[TeacherController::class,'show'])->name('teacher.index');

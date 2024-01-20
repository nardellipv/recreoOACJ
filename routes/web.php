<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/colegio', [App\Http\Controllers\SchoolController::class, 'index'])->name('school.index');
    Route::post('/colegio-editar/{id}', [App\Http\Controllers\SchoolController::class, 'editSchool'])->name('school.edit');

    Route::middleware(['completeProfileSchool'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
        Route::get('/profesor', [App\Http\Controllers\TeacherController::class, 'indexTeacher'])->name('teacher.index');
        Route::get('/profesor-agregar', [App\Http\Controllers\TeacherController::class, 'addTeacher'])->name('teacher.add');
        Route::post('/profesor-store', [App\Http\Controllers\TeacherController::class, 'storeTeacher'])->name('teacher.store');
        Route::get('/profesor-editar/{id}', [App\Http\Controllers\TeacherController::class, 'updateTeacher'])->name('teacher.update');
        Route::post('/profesor-upgrade/{id}', [App\Http\Controllers\TeacherController::class, 'upgradeTeacher'])->name('teacher.upgrade');
        Route::get('/profesor-delete/{id}', [App\Http\Controllers\TeacherController::class, 'deleteTeacher'])->name('teacher.delete');

        Route::middleware(['registerTeacher'])->group(function () {
            Route::get('/alumnos', [App\Http\Controllers\StudentController::class, 'indexStudent'])->name('student.index');
            Route::get('/alumnos-agregar', [App\Http\Controllers\StudentController::class, 'addStudent'])->name('student.add');
            Route::post('/alumnos-store', [App\Http\Controllers\StudentController::class, 'storeStudent'])->name('student.store');
            Route::get('/alumnos-editar/{id}', [App\Http\Controllers\StudentController::class, 'updateStudent'])->name('student.update');
            Route::post('/alumnos-upgrade/{id}', [App\Http\Controllers\StudentController::class, 'upgradeStudent'])->name('student.upgrade');
            Route::get('/alumnos-delete/{id}', [App\Http\Controllers\StudentController::class, 'deleteStudent'])->name('student.delete');
            Route::get('/alumnos/notas', [App\Http\Controllers\StudentController::class, 'notesStudent'])->name('student.notes');
            Route::post('/alumnos/agregar-nota-colegial/{id}', [App\Http\Controllers\StudentController::class, 'notesColegialAddStudent'])->name('student.AddnotesColegial');
            Route::post('/alumnos/agregar-nota-intercolegial/{id}', [App\Http\Controllers\StudentController::class, 'notesInterAddStudent'])->name('student.AddnotesInter');
        });
    });
});

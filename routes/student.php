<?php

use App\Http\Controllers\Dashbord\Student\ExamController;
use App\Http\Controllers\Dashbord\Student\LectureController;
use App\Http\Controllers\Dashbord\Student\LibraryController;
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Dashbord\Student\StudentProfileController;


/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:student']
    ],
    function () {

        Route::prefix('/student/dashboard')->group(function () {

            // Dashboard
            Route::get('', function () {
                return view('dashboard.Students.Dashboard.dashboard');
            });

            // Profile
            Route::resource('profile', StudentProfileController::class);

            // Exams
            Route::resource('exams', ExamController::class);

            // Library
            Route::get('library', [LibraryController::class, 'index'])->name('dashboard.student.library.index');
            Route::get('library/{file_name}', [LibraryController::class, 'download'])->name('dashboard.student.library.download');

            // Lectures
            Route::get('lectures', [LectureController::class, 'index'])->name('dashboard.student.lectures.index');
        });
    }
);

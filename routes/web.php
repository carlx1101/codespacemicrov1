<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Course\LessonController;
use App\Http\Controllers\Course\SectionController;
use App\Http\Controllers\Auth\GoogleLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'welcome']);
Route::get('/courses/{id}',  [PageController::class, 'courseOverview'])->name('course.overview');


Route::middleware([
    'auth:sanctum', 'user-access:student', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/student-dashboard', function () {
        return view('dashboard');
    })->name('student.dashboard');
});


Route::middleware([
    'auth:sanctum', 'user-access:tutor', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/tutor-dashboard', function () {
        return view('dashboard-tutor');
    })->name('tutor.dashboard');
});


Route::middleware([
    'auth:sanctum', 'user-access:school', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/school-dashboard', function () {
        return view('school.dashboard-school');
    })->name('school.dashboard');
    Route::resource('courses',  CourseController::class);
    Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');

    Route::patch('/courses/{id}/update-status', [CourseController::class, 'updateStatus'])->name('courses.updateStatus');
    Route::get('courses/{courseId}/sections', [SectionController::class, 'index'])->name('sections.index');
    Route::post('courses/{courseId}/sections', [SectionController::class, 'store'])->name('sections.store');
    Route::post('sections/{section}/lessons', [LessonController::class, 'store'])->name('lessons.store');
    Route::delete('sections/{section}/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');
    Route::delete('courses/{courseId}/sections/{sectionId}', [SectionController::class, 'destroy'])->name('sections.destroy');
});

Route::middleware([
    'auth:sanctum', 'user-access:admin', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('dashboard-admin');
    })->name('admin.dashboard');
});


Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\Auth\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

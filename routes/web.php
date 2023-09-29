<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum','user-access:student', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/student-dashboard', function () { return view('dashboard'); })->name('student.dashboard');
});


Route::middleware([
    'auth:sanctum','user-access:tutor', config('jetstream.auth_session'),'verified',
])->group(function () {
    Route::get('/tutor-dashboard', function () { return view('dashboard-tutor'); })->name('tutor.dashboard');
});


Route::middleware([
    'auth:sanctum','user-access:school', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/school-dashboard', function () { return view('dashboard-school'); })->name('school.dashboard');
});

Route::middleware([
    'auth:sanctum', 'user-access:admin', config('jetstream.auth_session'), 'verified',
])->prefix('admin')->group(function () {
    Route::get('/admin-dashboard', function () { return view('dashboard-admin'); })->name('admin.dashboard');
});


Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\Auth\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');


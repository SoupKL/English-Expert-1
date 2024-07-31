<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/main', [PageController::class, 'main'])->name('main');
Route::get('/all_courses', [PageController::class, 'allCourses'])->name('all_courses');
Route::get('/all_events', [PageController::class, 'allEvents'])->name('all_events');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/login_registration', [PageController::class, 'loginRegistration'])->name('login_registration');
Route::get('/test', [PageController::class, 'test'])->name('test');
Route::get('/all_news', [PageController::class, 'allNews'])->name('all_news');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::get('/course_A1', [PageController::class, 'courseA1'])->name('course_A1');
Route::get('/course_A2', [PageController::class, 'courseA2'])->name('course_A2');
Route::get('/course_B1', [PageController::class, 'courseB1'])->name('course_B1');
Route::get('/course_B2', [PageController::class, 'courseB2'])->name('course_B2');
Route::get('/course_C1', [PageController::class, 'courseC1'])->name('course_C1');
Route::get('/course_C2', [PageController::class, 'courseC2'])->name('course_C2');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/purpose', [PageController::class, 'purpose'])->name('purpose');
Route::get('/new1', [PageController::class, 'new1'])->name('new1');
Route::get('/new2', [PageController::class, 'new2'])->name('new2');
Route::get('/new3', [PageController::class, 'new3'])->name('new3');
Route::get('/new4', [PageController::class, 'new4'])->name('new4');
Route::get('/new5', [PageController::class, 'new5'])->name('new5');
Route::get('/new6', [PageController::class, 'new6'])->name('new6');
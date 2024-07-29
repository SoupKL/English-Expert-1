<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('main');
});

Route::get('/main', [PageController::class, 'main'])->name('main');
Route::get('/all_courses', [PageController::class, 'allCourses'])->name('all_courses');
Route::get('/all_events', [PageController::class, 'allEvents'])->name('all_events');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/login_registration', [PageController::class, 'loginRegistration'])->name('login_registration');
Route::get('/test', [PageController::class, 'test'])->name('test');
Route::get('/all_news', [PageController::class, 'allNews'])->name('all_news');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

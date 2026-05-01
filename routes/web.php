<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;

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



// Route::get('/', fn() => view('index'));
Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/about', [HomepageController::class, 'about'])->name('about');
Route::get('/contact', [HomepageController::class, 'contact'])->name('contact');

// Route::get('/about', fn() => view('about'));
// Route::get('/contact', fn() => view('contact'));

// Services (DB-driven)
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');


// Route::post('/contact/send', [ContactController::class, 'send']);
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

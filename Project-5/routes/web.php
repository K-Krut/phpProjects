<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/catalogue', [HomeController::class, 'catalogue'])->name('catalogue');
Route::get('/delivery', [HomeController::class, 'delivery'])->name('delivery');



Route::get('/sculptures-001-582', function () {
    return view('products.sculptures-001-582');
});

Route::get('/vikings', function () {
    return view('collections.vikings');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login',[AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process',[AuthController::class, 'login'])->name('login_process');

    Route::get('/register',[AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process',[AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot',[AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process',[AuthController::class, 'forgot'])->name('forgot_process');
});

Route::get('/contact', [MailController::class, 'contact'])->name('contact');
Route::post('/contact_form_process',[MailController::class, 'contactForm'])->name('contact_form_process');

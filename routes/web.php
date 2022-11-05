<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['guest', 'prevent.history'])->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
    Route::get('/signup', [AuthController::class, 'register'])->name('register');
    Route::post('/signup', [AuthController::class, 'registerPost'])->name('register.post');
});

Route::middleware(['auth', 'prevent.history'])->group(function() {
    Route::post('/logout', [AuthController::class, 'logOut'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::middleware(['can:verify_role,"teacher"'])->group(function() {
        Route::get('/courses', [UserController::class, 'coursesToTeach'])->name('courses.teach');
    });

    Route::middleware(['can:verify_role,"student"'])->group(function() {
        Route::get('/appointments', [HomeController::class, 'appointments'])->name('appointments');
    });

});

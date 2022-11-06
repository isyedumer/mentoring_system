<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

    Route::middleware(['can:verify_role,"super_admin"'])->group(function() {
        Route::get('/students', [UserController::class, 'students'])->name('students');
        Route::get('/teachers', [UserController::class, 'teachers'])->name('teachers');
        Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
    });

    Route::middleware(['can:verify_role,"teacher"'])->prefix('teacher')->group(function() {
        Route::get('/appointments', [HomeController::class, 'appointments_Teacher'])->name('teacher.appointments');
        Route::get('/courses', [UserController::class, 'coursesToTeach'])->name('courses.teach');
        Route::get('/courses/{course}/materials/upload', [UserController::class, 'uploadMaterial'])->name('teacher.course.materials.upload');
        Route::post('/courses/{course}/materials/upload', [UserController::class, 'uploadMaterialPost'])->name('teacher.course.materials.upload.post');
        Route::get('/courses/{course}/materials', [UserController::class, 'materials'])->name('teacher.course.materials');
        Route::get('/profile/{user}/edit', [ProfileController::class, 'editTeacherProfile'])->name('teacher.profile.edit');
        Route::post('/profile/{user}/update', [ProfileController::class, 'updateTeacherProfile'])->name('teacher.profile.update');
        Route::get('/appointments/{id}/accept', [HomeController::class, 'acceptAppointment'])->name('accept.appointment');
        Route::get('/appointments/{id}/reject', [HomeController::class, 'rejectAppointment'])->name('reject.appointment');
        Route::get('/students', [UserController::class, 'studentList']);
    });

    Route::middleware(['can:verify_role,"student"'])->prefix('student')->group(function() {
        Route::get('/appointments', [HomeController::class, 'appointments_Student'])->name('student.appointments');
        Route::get('/appointments/book', [HomeController::class, 'bookAppointment'])->name('appointments.book');
        Route::get('/courses/{teacherCourse}', [HomeController::class, 'courseDetail'])->name('course.detail');
        Route::get('/appointments/make/courses/{course}/teachers/{teacher}', [UserController::class, 'makeAppointment'])->name('appointments.make');
        Route::post('/appointments/make/courses/{course}/teachers/{teacher}', [UserController::class, 'makeAppointmentPost'])->name('appointments.make.post');
        Route::get('/courses/{appointmentId}/materials', [UserController::class, 'materials_Student'])->name('student.course.materials');
        Route::get('/profile/{user}/edit', [ProfileController::class, 'editStudentProfile'])->name('student.profile.edit');
        Route::post('/profile/{user}/update', [ProfileController::class, 'updateStudentProfile'])->name('student.profile.update');
    });

    Route::get('teacher/profile/{user}', [ProfileController::class, 'viewTeacherProfile'])->name('teacher.profile');
    Route::get('student/profile/{user}', [ProfileController::class, 'viewStudentProfile'])->name('student.profile');


});

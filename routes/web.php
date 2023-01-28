<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ClinicController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/{type}', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/signup/{type}', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->name('register');

Route::group(['middleware' => ['web', 'auth', 'patient']], function(){
    Route::get('/patient/profile', [PatientController::class, 'profile'])->name('patient.profile');
    Route::get('/patient/doctorapp', [PatientController::class, 'doctorapp'])->name('patient.doctorapp');
    Route::post('/patient/doctorapp', [PatientController::class, 'doctorappointment'])->name('patient.doctorappointment');
    Route::get('/patient/clinicapp', [PatientController::class, 'clinicapp'])->name('patient.clinicapp');
    Route::post('/patient/clinicapp', [PatientController::class, 'clinicappointment'])->name('patient.clinicappointment');
});

Route::group(['middleware' => ['web', 'auth', 'admin']], function(){
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
});

Route::group(['middleware' => ['web', 'auth', 'doctor']], function(){
    Route::get('/doctor/profile', [DoctorController::class, 'profile'])->name('doctor.profile');
});

Route::group(['middleware' => ['web', 'auth', 'clinic']], function(){
    Route::get('/clinic/profile', [ClinicController::class, 'profile'])->name('clinic.profile');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


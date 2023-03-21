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

/*Route::get('/', function () {
    return view('welcome');
})->name('welcome');*/

Route::get('/', [AuthController::class, 'welcome'])->name('welcome');
Route::get('/login/{type}', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/signup/{type}', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->name('register');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::post('/forgot', [AuthController::class, 'forgotemail'])->name('forgot.email');
Route::get('/resetpassword/{token}', [AuthController::class, 'resetpassword'])->name('resetpassword');
Route::post('/resetpassword', [AuthController::class, 'updatepassword'])->name('updatepassword');
Route::get('/error', [AuthController::class, 'error'])->name('error');

Route::group(['middleware' => ['web', 'auth', 'patient']], function(){
    Route::get('/patient/profile', [PatientController::class, 'profile'])->name('patient.profile');
    Route::post('/patient/profile/{id}', [PatientController::class, 'profileupdate'])->name('patient.profile.update');
    Route::get('/patient/doctorapp', [PatientController::class, 'doctorapp'])->name('patient.doctorapp');
    Route::post('/patient/doctorapp', [PatientController::class, 'doctorappointment'])->name('patient.doctorappointment');
    Route::get('/patient/clinicapp', [PatientController::class, 'clinicapp'])->name('patient.clinicapp');
    Route::post('/patient/clinicapp', [PatientController::class, 'clinicappointment'])->name('patient.clinicappointment');
    Route::post('/appointment/create/', [PatientController::class, 'saveappointment'])->name('appointment.save');
    Route::post('/service/create/', [PatientController::class, 'saveservice'])->name('service.save');
    Route::get('/message', [PatientController::class, 'message'])->name('message');
    Route::get('/patient/bookings', [PatientController::class, 'bookings'])->name('bookings');
});

Route::group(['middleware' => ['web', 'auth', 'admin']], function(){
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
});

Route::group(['middleware' => ['web', 'auth', 'doctor']], function(){
    Route::get('/doctor/profile', [DoctorController::class, 'profile'])->name('doctor.profile');
    Route::post('/doctor/profile/{id}', [DoctorController::class, 'profileupdate'])->name('doctor.profile.update');

    Route::get('/doctor/settings/', [DoctorController::class, 'settings'])->name('doctor.settings');
    Route::post('/doctor/settings/{id}/', [DoctorController::class, 'settingsupdate'])->name('doctor.settings.update');
    Route::get('/getBreakTime/', [DoctorController::class, 'getBreakTime']);

    Route::get('/doctor/leaves/', [DoctorController::class, 'leaves'])->name('doctor.leaves');
    Route::post('/doctor/leaves/{id}/', [DoctorController::class, 'leavesupdate'])->name('doctor.leaves.update');

    Route::get('/doctor/appointments/', [DoctorController::class, 'appointments'])->name('doctor.appointments');
    Route::post('/doctor/appointments/', [DoctorController::class, 'saveappointments'])->name('doctor.appointments.save');

    Route::get('/doctor/reports/', [DoctorController::class, 'reports'])->name('doctor.reports');
    Route::post('/doctor/reports/', [DoctorController::class, 'getAppointmentSummary'])->name('doctor.report.appointments');

});

Route::group(['middleware' => ['web', 'auth', 'clinic']], function(){
    Route::get('/clinic/profile', [ClinicController::class, 'profile'])->name('clinic.profile');
    Route::post('/clinic/profile/{id}', [ClinicController::class, 'profileupdate'])->name('clinic.profile.update');

    Route::get('/clinic/requests', [ClinicController::class, 'requests'])->name('clinic.requests');
    Route::get('/updateClinicRequestStatus', [ClinicController::class, 'updateClinicRequestStatus']);

    Route::get('/clinic/services', [ClinicController::class, 'services'])->name('clinic.services');
    Route::post('/clinic/services', [ClinicController::class, 'servicesUpdate'])->name('clinic.services.update');

    Route::get('/clinic/reports', [ClinicController::class, 'reports'])->name('clinic.reports');
    Route::post('/clinic/reports', [ClinicController::class, 'fetchreports'])->name('clinic.reports.fetch');

});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


<?php

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
// Route::resource('/form', [App\Http\Controllers\HomePageController::class]);
Route::get('/form', [App\Http\Controllers\HomePageController::class, 'index']);
Route::post('/form', [App\Http\Controllers\HomePageController::class, 'store'])->name('form.store');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Auth::routes();

Route::get('/users_profile', [App\Http\Controllers\PatientController::class, 'users_profile'])->name('users_profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patient_dashboard', [App\Http\Controllers\HomeController::class, 'patient_dashboard'])->name('patient_dashboard');
Route::get('/order_management', [App\Http\Controllers\HomeController::class, 'order_management'])->name('order_management');

Route::resource('patient_profile', App\Http\Controllers\Patient\PatientProfileController::class);
Route::post('/patient_profile/updatePassword/{id}', [App\Http\Controllers\Patient\PatientProfileController::class, 'updatePassword'])->name('patient_profile.updatePassword');
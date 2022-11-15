<?php

use App\Http\Controllers\ApplicantController;
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

Route::get('/', function () {
    return redirect('/applicant/create');
});

// applicant
Route::get('applicant', [ApplicantController::class, 'index']);
Route::get('applicant/create', [ApplicantController::class, 'create']);
Route::post('applicant', [ApplicantController::class, 'store'])->name('applicant.store');
Route::get('applicant/{applicant}/edit', [ApplicantController::class, 'edit']);
Route::put('applicant/{applicant}', [ApplicantController::class, 'update']);
Route::delete('applicant/{applicant}', [ApplicantController::class, 'destroy']);

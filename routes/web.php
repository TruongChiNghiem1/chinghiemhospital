<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AjaxLoadController;
use App\Http\Controllers\LoginController;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [LoginController::class, 'getLogin'])->name('get_login');
Route::post('/', [LoginController::class, 'postLogin'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::prefix('load-ajax')->name('load_ajax')->group(function () {
   Route::controller(AjaxLoadController::class)->prefix('select2')->name('select2.')->group(function () {
       Route::get('/load-province', 'loadProvince')->name('load_province');
   });
});

Route::prefix('file-manager')->group(function () {
   \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::prefix('/')->group(function () {
    Route::controller(\App\Http\Controllers\PDFController::class)->prefix('view-pdf')->name('view_pdf.')->group(function () {
        Route::get('catch-the-number-pdf/{id}', 'catchTheNumberPDF')->name('catch_the_number_pdf');
    });

    Route::controller(\App\Http\Controllers\PatientController::class)->prefix('patient')->name('patient.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/save-information', 'saveInformation')->name('save_information');
        Route::get('/one-data', 'getOnePatientByCode')->name('get_one_patient_by_code');
    });

    Route::controller(\App\Http\Controllers\DashboardController::class)->prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', 'index')->name('index');
    });

    //Điều dưỡng
    Route::controller(\App\Http\Controllers\NursingController::class)->prefix('nursing')->name('nursing.')->group(function () {
        Route::get('/', 'index')->name('index');
    });

    //Khoa khám bệnh
    Route::controller(\App\Http\Controllers\MedicalExaminationController::class)->prefix('medical-examination')->name('medical_examination.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/get-data', 'getData')->name('get_data');
        Route::get('/create', 'create')->name('create');
    });
});
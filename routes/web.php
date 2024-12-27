<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AjaxLoadController;
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('load-ajax')->name('load_ajax')->group(function () {
   Route::controller(AjaxLoadController::class)->prefix('select2')->name('select2.')->group(function () {
       Route::get('/load-province', 'loadProvince')->name('load_province');
   });
});

Route::prefix('/')->group(function () {
    Route::controller(\App\Http\Controllers\PatientController::class)->prefix('patient')->name('patient.')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::post('/save-information', 'saveInformation')->name('save_information');
    });
});
<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ContactUsController;
use \App\Http\Controllers\ServicesController;
use \App\Http\Controllers\SearchJobController;
use \App\Http\Controllers\DownloadPdfController;
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
    return view('content.index');
});

Route::get('/download-veelgestelde', [DownloadPdfController::class, 'downloadVeelgesteldePdf']);
Route::get('/download-over', [DownloadPdfController::class, 'downloadVeelgesteldePdf']);
Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::post('/send-form', [ContactUsController::class, 'sendContactMail']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/search-job', [SearchJobController::class, 'search']);
Route::get('/job-list', [SearchJobController::class, 'list']);

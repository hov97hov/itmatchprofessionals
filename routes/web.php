<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ContactUsController;
use \App\Http\Controllers\ServicesController;
use \App\Http\Controllers\SearchJobController;
use \App\Http\Controllers\DownloadPdfController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\JobItemController;
use \App\Http\Controllers\FooterController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/download-veelgestelde', [DownloadPdfController::class, 'downloadVeelgesteldePdf']);
Route::get('/download-over', [DownloadPdfController::class, 'downloadVeelgesteldePdf']);
Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::post('/send-form', [ContactUsController::class, 'sendContactMail']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/service-item/{id}', [ServicesController::class, 'item'])->name('service-item');
Route::get('/footer-item/{id}', [FooterController::class, 'footerItem'])->name('footer-item');
Route::get('/search-job', [SearchJobController::class, 'search']);
Route::get('/job-item/{id}', [JobItemController::class, 'index'])->name('job-item');


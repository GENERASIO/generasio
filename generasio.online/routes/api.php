<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test-payment', [ApiController::class, 'testPayment'])->name('api.test-payment');
Route::get('/test-mail', [ApiController::class, 'testMail'])->name('api.test-mail');

Route::get('/generate-service-catalog', [ApiController::class, 'generateServiceCatalog'])->name('api.generate-service-catalog');
Route::get('/download-api', [ApiController::class, 'downloadApi'])->name('api.download-api');
Route::get('/reconsile-price', [ApiController::class, 'reconsilePrice'])->name('api.reconsile-price');
Route::get('/update-service-product', [ApiController::class, 'updateServiceProduct'])->name('api.update-service-product');

Route::get('/payment', [ApiController::class, 'payment'])->name('api.payment');
Route::post('/midtrans-callback', [ApiController::class, 'midtransCallback'])->name('api.midtrans-callback');
Route::post('/test-callback', [ApiController::class, 'testCallback'])->name('api.test-callback');
Route::get('/get-username-game', [ApiController::class, 'getUsernameGame'])->name('api.get-username-game');
Route::get('/get-visitor', [ApiController::class, 'getVisitor'])->name('api.get-visitor');

Route::get('/check-service', [ApiController::class, 'checkService'])->name('api.check-service');
Route::get('/get-product-by-code', [ApiController::class, 'getProductByCode'])->name('api.get-product-by-code');

Route::get('/blogs', [ApiController::class, 'blogs'])->name('api.blogs');
Route::get('/blogs-viewer', [ApiController::class, 'blogsViewer'])->name('api.blogs-viewer');

Route::get('/select-customer', [ApiController::class, 'selectCustomer'])->name('api.select-customer');
Route::get('/select-coa', [ApiController::class, 'selectCoa'])->name('api.select-coa');
Route::get('/select-coa-number', [ApiController::class, 'selectCoaNumber'])->name('api.select-coa-number');
Route::get('/log-activity', [ApiController::class, 'logActivity'])->name('api.log-activity');
Route::get('/announcement', [ApiController::class, 'announcement'])->name('api.announcement');
Route::get('/announcementStatus', [ApiController::class, 'announcementStatus'])->name('api.announcement-status');


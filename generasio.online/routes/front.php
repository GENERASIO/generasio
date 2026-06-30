<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\PagesController;

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

Route::get('/coming-soon', [PagesController::class, 'coomingSoon'])->name('front.coming-soon');
Route::get('/term', [PagesController::class, 'term'])->name('front.term');
Route::get('/help', [PagesController::class, 'help'])->name('front.help');
Route::get('/credit', [PagesController::class, 'credit'])->name('front.credit');

Route::get('/', [PagesController::class, 'index'])->name('front.index');
Route::get('/about', [PagesController::class, 'about'])->name('front.about');
Route::get('/service', [PagesController::class, 'service'])->name('front.service');
Route::get('/service/{slug}', [PagesController::class, 'serviceDetail'])->name('front.service.detail');
Route::get('/service/{slug}/{game}', [PagesController::class, 'servicePurchase'])->name('front.service.purchase');

Route::get('/transaction', [PagesController::class, 'transaction'])->name('front.transaction');
Route::get('/transaction/list', [PagesController::class, 'transactionList'])->name('front.transaction.list');
Route::get('/transaction/list/{invoiceId}', [PagesController::class, 'transactionDetail'])->name('front.transaction.list.detail');

// Route::get('/article', [PagesController::class, 'article'])->name('front.article');
// Route::get('/article/{slug}', [PagesController::class, 'articleDetail'])->name('front.article.detail');
// Route::get('/contact', [PagesController::class, 'contact'])->name('front.article');
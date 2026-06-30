<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

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

// Auth::routes();


Route::get('/', 'PagesController@index')->name('login');
Route::post('/login', 'PagesController@login')->name('login.post');

Route::get('/forgot-password', 'PagesController@forgotPassword')->name('login.forgot-password');
Route::post('/forgot-password', 'PagesController@forgotPasswordSend')->name('login.forgot-password-send');
Route::get('/forgot-password-resend', 'PagesController@forgotPasswordResend')->name('login.forgot-password-resend');
Route::get('/forgot-password-process', 'PagesController@forgotPasswordProcess')->name('login.forgot-password-process');
Route::post('/forgot-password-update', 'PagesController@forgotPasswordUpdate')->name('login.forgot-password-update');

Route::get('/email-verification', 'PagesController@emailVerification')->name('login.email-verification');
Route::get('/email-verification-request', 'PagesController@emailVerificationRequest')->name('login.email-verification-request');
Route::get('/email-verification-request-resend', 'PagesController@emailVerificationRequestResend')->name('login.email-verification-request-resend');
Route::get('/email-verification-request-process', 'PagesController@emailVerificationRequestProcess')->name('login.email-verification-request-process');
Route::get('/email-verification-request-success', 'PagesController@emailVerificationRequestSuccess')->name('login.email-verification-request-success');
Route::get('/request-account-verification', 'PagesController@accountVerification')->name('login.request-account-verification');

Route::get('/password-verification', 'PagesController@passwordVerification')->name('login.password-verification');

Route::get('/regist', 'PagesController@regist')->name('login.regist');
Route::post('/regist', 'PagesController@registSend')->name('login.regist-send');

Route::get('/logout', 'PagesController@logout')->name('logout');

Route::post('/dropzone', 'PagesController@dropzone');

Route::get('income-cashiers/{id}/receipt', 'IncomeCashierController@receipt')->name('income-cashiers.receipt');
Route::get('outcome-cashiers/{id}/receipt', 'OutcomeCashierController@receipt')->name('outcome-cashiers.receipt');

Route::group(['middleware' => ['auth']], function () {
	Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
	Route::resource('roles', 'RoleController');
	Route::resource('users', 'UserController');
	Route::resource('activity-logs', 'ActivityLogController');
	Route::resource('announcements', 'AnnouncementController');
	Route::resource('company-profiles', 'CompanyProfileController');
	
	Route::get('about/faq', 'AboutController@faq')->name('about.faq');
	Route::get('about/team', 'AboutController@team')->name('about.team');
	Route::get('about/company', 'AboutController@company')->name('about.company');
	
	Route::get('profiles/email-verification/{id}', 'ProfileController@emailVerification')->name('profile.email-verification');
	Route::post('profiles/deactivated/{id}', 'ProfileController@deactivated')->name('profile.deactivated');
	Route::resource('profiles', 'ProfileController');
	
	Route::resource('food-menus', 'FoodMenuController');
	Route::get('food-menus/{slug}/delete-all-gallery', 'FoodMenuController@deleteAllGallery');
	Route::resource('food-categories', 'FoodCategoryController');
	Route::resource('food-reviews', 'FoodReviewController');
	Route::resource('food-interactions', 'FoodInteractionController');
	
	Route::get('flush', 'SystemController@flush')->name('flush');
	Route::resource('coa-accounts', 'CoaAccountController');
	Route::resource('balance-beginnings', 'BalanceBeginningController');
	
	Route::get('finance-dashboards', 'DashboardController@finance');
	Route::get('food-menu-dashboards', 'DashboardController@foodMenu');
	Route::get('blog-dashboards', 'DashboardController@blog');
	
	Route::get('income-cashiers/generate', 'IncomeCashierController@generate');
	Route::get('income-cashiers/export', 'IncomeCashierController@exportExcel')->name('income-cashiers.exportExcel');
	Route::get('income-cashiers/{id}/print', 'IncomeCashierController@print')->name('income-cashiers.print');
	
	Route::get('outcome-cashiers/generate', 'OutcomeCashierController@generate');
	Route::get('outcome-cashiers/export', 'OutcomeCashierController@exportExcel')->name('outcome-cashiers.exportExcel');
	Route::get('outcome-cashiers/{id}/print', 'OutcomeCashierController@print')->name('outcome-cashiers.print');
	
	Route::resource('income-cashiers', 'IncomeCashierController');
	Route::resource('outcome-cashiers', 'OutcomeCashierController');
	

	Route::resource('contents', 'ContentController');
	Route::get('contents/destroy-content-file/{id}', 'ContentController@destroyContentFile')->name('content.destroy-content-file');
	Route::resource('blogs', 'BlogController');
	Route::resource('blog-categories', 'BlogCategoryController');
	Route::resource('blog-interactions', 'BlogInteractionController');

	Route::resource('transactions', 'TransactionController');
	Route::resource('service-catalogs', 'ServiceCatalogController');
	Route::resource('service-products', 'ServiceProductController');
});

// Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
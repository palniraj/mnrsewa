<?php

use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\ServiceCategory;
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



Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('mnrsewa.index');
Route::get('/company-register', [App\Http\Controllers\FrontendController::class, 'compregister'])->name('company.register');
Route::get('/freelancer-register', [App\Http\Controllers\FrontendController::class, 'freelregister'])->name('freelancer.register');
Route::get('/customer-register', [App\Http\Controllers\FrontendController::class, 'custregister'])->name('customer.register');


Auth::routes(['register' => true]);
Route::group(['prefix' => 'web-panel', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('webpanel.dashboard');
    Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('webpanel.contact');
    Route::resource('servicecategory', ServiceCategoryController::class);
    Route::resource('user', UserController::class);
    Route::resource('service', ServiceController::class);
});

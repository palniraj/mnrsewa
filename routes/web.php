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



Auth::routes();

Route::get('/cmspanel', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('mnrsewa.index');
Route::get('/company-register', [App\Http\Controllers\FrontendController::class, 'compregister'])->name('company.register');
Route::get('/freelancer-register', [App\Http\Controllers\FrontendController::class, 'freelregister'])->name('freelancer.register');
Route::get('/customer-register', [App\Http\Controllers\FrontendController::class, 'custregister'])->name('customer.register');

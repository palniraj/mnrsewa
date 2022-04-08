<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterestfieldController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceCategoryController;


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



Route::get('/', [FrontendController::class, 'index'])->name('mnrsewa.index');
Route::get('/company-register', [FrontendController::class, 'compregister'])->name('company.register');
Route::get('/freelancer-register', [FrontendController::class, 'freelregister'])->name('freelancer.register');
Route::get('/customer-register', [FrontendController::class, 'custregister'])->name('customer.register');

Route::get('/home', [FrontendController::class, 'home'])->name('frontend.home');

Route::get('add-to-cart/{service}', [ServiceController::class, 'addToCart'])->name('cart');
Route::get('remove-cart-item/{service}', [ServiceController::class, 'reduceQuantity'])->name('cart.reduce');
Route::get('view-cart', [ServiceController::class, 'viewCart'])->name('cart.view');
Route::get('delete-cart/{serviceId}', [ServiceController::class, 'deleteCart'])->name('cart.delete');


Route::get('cart/checkout', [ServiceController::class, 'checkout'])->name('cart.checkout');
Route::get('thank-you', [OrderController::class, 'thankyou'])->name('thankyou');

Route::resource('orders', OrderController::class)->middleware('auth');

// Route::view('frontend.pages.order-completed', 'order-completed');
Route::get('/service/search', [ServiceController::class, 'search'])->name('service.search');
Auth::routes(['register' => true]);
Route::group(['prefix' => 'web-panel', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('webpanel.dashboard');
    Route::get('contact', [HomeController::class, 'contact'])->name('webpanel.contact');
    Route::resource('servicecategory', ServiceCategoryController::class);
    Route::resource('user', UserController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('', InterestfieldController::class);
    // Route::resource('profile', ProfileController::class);
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile/store', [ProfileController::class, 'store'])->name('profile.store');
    Route::put('profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('interestfield', [InterestfieldController::class, 'index'])->name('interestfield.index');
    Route::post('interestfield/store', [InterestfieldController::class, 'store'])->name('interestfield.store');
    Route::put('interestfield/{interestfield}', [InterestfieldController::class, 'update'])->name('interestfield.update');

});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PwController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('landing');
})->middleware('guest');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    //Welcome
    Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');
    Route::get('/detail_product/{id}', [WelcomeController::class, 'detailproduct'])->name('detailproduct');

    //Search
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::get('/check', function () {
        return view('check');
    });

    //Update profile
    Route::get('/profile/edit-profile', [UpdateController::class, 'edit'])->name('auth.edit');
    Route::put('/profile/update-profile', [UpdateController::class, 'update'])->name('auth.update');
    Route::get('/profile/edit-pw', [PwController::class, 'edit'])->name('auth.edit');
    Route::put('/profile/update-pw', [PwController::class, 'update'])->name('auth.password');
});

Route::group(['middleware' => 'member'], function () {
    //Cart
    Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

    //History
    Route::get('/history', [HistoryController::class, 'History'])->name('History');

    //Profile
    Route::get('/profile', [UserController::class, 'user'])->name('users');

});

Route::group(['middleware' => 'admin'], function () {
    //admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard2', [AdminController::class, 'dashboard'])->name('dashboard2');
    Route::get('/detail_item/{id}', [AdminController::class, 'detailitem'])->name('detailitem');
    Route::get('/user', [AdminController::class, 'create'])->name('create');
    Route::post('/user', [AdminController::class, 'store'])->name('store_item');
    Route::get('/welcome-store', [AdminController::class, 'store'])->name('store');
    Route::get('/profil', [UserController::class, 'admin'])->name('admins');
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



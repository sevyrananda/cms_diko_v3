<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FiturLandingController;
use App\Http\Controllers\FiturPosController;
use App\Http\Controllers\FiturSpController;
use App\Http\Controllers\PluginPosController;
use App\Http\Controllers\PluginSpController;
use App\Http\Controllers\PricingPosController;
use App\Http\Controllers\PricingSpController;
use App\Http\Controllers\FaqLandingController;
use App\Http\Controllers\FaqPosController;
use App\Http\Controllers\FaqSpController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/landing/preview/', [FiturLandingController::class, 'preview'])->name('landing.preview');

Route::group(['middleware' => 'auth'], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Landing Page - Fitur
    Route::get('/landing/fitur', [FiturLandingController::class, 'index'])->name('landing.fitur');
    Route::post('/landing/store', [FiturLandingController::class, 'store'])->name('landing.store');
    Route::delete('/landing/post/{id}', [FiturLandingController::class, 'destroy'])->name('landing.destroy');
    Route::get('/landing/edit/{id}', [FiturLandingController::class, 'edit'])->name('landing.edit');
    Route::put('/landing/update/{id}', [FiturLandingController::class, 'update'])->name('landing.update');

    //Landing Page - Pricing
    Route::get('/pricing', [PricingLandingController::class, 'index'])->name('pricing');
    // Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
    // Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
    // Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
    // Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

    //Landing Page - Faq
    Route::get('/faq', [FaqLandingController::class, 'index'])->name('faq');
    // Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
    // Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
    // Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
    // Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');


    //DIKO POS - Fitur
    Route::get('/pos/fitur/list', [FiturPosController::class, 'index'])->name('pos.fitur');
    Route::post('/pos/fitur/store', [FiturPosController::class, 'store'])->name('pos.fitur.store');
    Route::delete('/pos/fitur/{id}', [FiturPosController::class, 'destroy'])->name('pos.fitur.destroy');
    Route::get('/pos/fitur/{id}/edit', [FiturPosController::class, 'edit'])->name('pos.fitur.edit');
    Route::put('/pos/fitur/update/{id}', [FiturPosController::class, 'update'])->name('pos.fitur.update');
    Route::get('/pos/fitur/preview/', [FiturPosController::class, 'preview'])->name('pos.fitur.preview');

    //DIKO POS - Pricing
    Route::get('/pos/pricing/list', [PricingPosController::class, 'index'])->name('posPricing');
    // Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
    // Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
    // Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
    // Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

    //DIKO POS - Plugin
    Route::get('/pos/plugin/list', [PluginPosController::class, 'index'])->name('posPlugin');
    // Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
    // Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
    // Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
    // Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

    //DIKO POS - Faq
    Route::get('/pos/faq/list', [FaqPosController::class, 'index'])->name('posFaq');
    // Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
    // Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
    // Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
    // Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');


    //DIKO SP - Fitur
    Route::get('/sp/fitur/list', [FiturSpController::class, 'index'])->name('spFitur');
    // Route::post('/store', [FiturSpController::class, 'store'])->name('store');
    // Route::delete('/posts/{id}', [FiturSpController::class, 'destroy'])->name('destroy');
    // Route::get('/edit/{id}', [FiturSpController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [FiturSpController::class, 'update'])->name('update');
    // Route::get('/preview/{id}', [FiturSpController::class, 'preview'])->name('preview');

    //DIKO SP - Plugin
    Route::get('/sp/plugin/list', [PluginSpController::class, 'index'])->name('spPlugin');
    // Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
    // Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
    // Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
    // Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

    //DIKO SP - Pricing
    Route::get('/sp/pricing/list', [PricingSpController::class, 'index'])->name('spPricing');
    // Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
    // Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
    // Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
    // Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

    //DIKO SP - Faq
    Route::get('/sp/faq/list', [FaqSpController::class, 'index'])->name('spFaq');
    // Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
    // Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
    // Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
    // Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
    // Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [AuthController::class, 'setelahLogin'])->name('home');

Route::get('/list', [PostController::class, 'index'])->name('list');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [PostController::class, 'update'])->name('update');
Route::get('/preview/{id}', [PostController::class, 'preview'])->name('preview');



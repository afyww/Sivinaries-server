<?php

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;

//AUTH
Route::get('/', [AuthController::class, 'vlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('masuk');

Route::middleware('auth', 'LoginAuth:admin')->group(function () {
//USER
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/adduser', [UserController::class, 'create'])->name('adduser');
Route::post('/createuser', [UserController::class, 'store'])->name('createuser');
Route::get('/edituser/{id}', [UserController::class, 'edit'])->name('edituser');
Route::put('/updateuser/{id}', [UserController::class, 'update'])->name('updateuser');
Route::delete('/destroyuser/{id}', [UserController::class, 'destroy'])->name('destroyuser');
//PAGES
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
Route::get('/content', [PagesController::class, 'content'])->name('content');
Route::get('/works', [PagesController::class, 'works'])->name('works');
Route::get('/setting', [PagesController::class, 'setting'])->name('setting');
Route::get('/profil', [PagesController::class, 'profil'])->name('profil');
Route::get('/search', [PagesController::class, 'search'])->name('search');
//LOGOUT
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});



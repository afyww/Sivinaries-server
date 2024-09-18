<?php

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProjectController;

//AUTH
Route::get('/', [AuthController::class, 'vlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('masuk');

Route::middleware('auth:sanctum')->group(function () {

    //PAGES
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/search', [PagesController::class, 'search'])->name('search');

    //PROJECT
    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/addproject', [ProjectController::class, 'create'])->name('addproject');
    Route::post('/createproject', [ProjectController::class, 'store'])->name('createproject');
    Route::get('/editproject/{id}', [ProjectController::class, 'edit'])->name('editproject');
    Route::put('/updateproject/{id}', [ProjectController::class, 'update'])->name('updateproject');
    Route::delete('/destroyproject/{id}', [ProjectController::class, 'destroy'])->name('destroyproject');

    //PRICE
    Route::get('/price', [PriceController::class, 'index'])->name('price');
    Route::get('/addprice', [PriceController::class, 'create'])->name('addprice');
    Route::post('/createprice', [PriceController::class, 'store'])->name('createprice');
    Route::get('/editprice/{id}', [PriceController::class, 'edit'])->name('editprice');
    Route::put('/updateprice/{id}', [PriceController::class, 'update'])->name('updateprice');
    Route::delete('/destroyprice/{id}', [PriceController::class, 'destroy'])->name('destroyprice');

    //TASK
    Route::get('/task', [TaskController::class, 'index'])->name('task');
    Route::get('/addtask', [taskController::class, 'create'])->name('addtask');
    Route::post('/createtask', [TaskController::class, 'store'])->name('createtask');
    Route::get('/edittask/{id}', [TaskController::class, 'edit'])->name('edittask');
    Route::put('/updatetask/{id}', [TaskController::class, 'update'])->name('updatetask');
    Route::delete('/destroytask/{id}', [TaskController::class, 'destroy'])->name('destroytask');

    //PAYMENT
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('/addpayment', [PaymentController::class, 'create'])->name('addpayment');
    Route::post('/createpayment', [PaymentController::class, 'store'])->name('createpayment');
    Route::get('/editpayment/{id}', [PaymentController::class, 'edit'])->name('editpayment');
    Route::put('/updatepayment/{id}', [PaymentController::class, 'update'])->name('updatepayment');
    Route::delete('/destroypayment/{id}', [PaymentController::class, 'destroy'])->name('destroypayment');

    //USER
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/adduser', [UserController::class, 'create'])->name('adduser');
    Route::post('/createuser', [UserController::class, 'store'])->name('createuser');
    Route::get('/edituser/{id}', [UserController::class, 'edit'])->name('edituser');
    Route::put('/updateuser/{id}', [UserController::class, 'update'])->name('updateuser');
    Route::delete('/destroyuser/{id}', [UserController::class, 'destroy'])->name('destroyuser');

    //LOGOUT
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

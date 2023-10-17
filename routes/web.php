<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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



Route::get('/setup', function () {
    return view('setup')->with('content', '');
});


// Authentication
Route::get('/reg', [UserController::class, 'regpage'])->middleware('guest');
Route::post('/reg', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'loginpage'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/acc', [UserController::class, 'manageAccPage']);
Route::put('/acc', [UserController::class, 'manageAccount']);




// Manage Customers
Route::controller(CustomerController::class)->group(function(){
    Route::get('/customers', 'render')->middleware('auth'); //list
    Route::post('/addCustomers', 'create');
    Route::get('/profile{id}', 'read')->middleware('auth');
    Route::put('/profile/{id}', 'update');
    Route::delete('/destroy/{id}', 'delete');
});
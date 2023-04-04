<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardDirect;
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

/* login and registration routing */
Route::get('/login', [AuthController::class, 'login']);
Route::get('/registration', [AuthController::class, 'registration']);
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/logout', [AuthController::class, 'logout']);

/* dashboard routing */
Route::get('/inventory-in', function(){
    return view('inventory.inventory-in');
})->name('submit-inventory');
Route::get('/inventory-out', function(){
    return view('inventory.inventory-out');
});
Route::get('/orders', function(){
    return view('inventory.orders');
});
Route::get('/accounts-paid', function(){
    return view('transactions.accounts-paid');
});
Route::get('/accounts-received', function(){
    return view('transactions.accounts-received');
});

/* inventory routing */
Route::post('/inventory-in', [DashboardDirect::class, 'store']);
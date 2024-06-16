<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/customersinfo', CustomerController::class .'@index')->name('customers.index');
Route::get('/customers/create', CustomerController::class . '@create')->name('customers.create');
Route::post('/customers', CustomerController::class .'@store')->name('customers.store');
Route::get('/customers/{customer}', CustomerController::class .'@show')->name('customers.show');
Route::get('/customers/{customer}/edit', CustomerController::class .'@edit')->name('customers.edit');
Route::put('/customers/{customer}', CustomerController::class .'@update')->name('customers.update');
Route::delete('/customers/{customer}', CustomerController::class .'@destroy')->name('customers.destroy');
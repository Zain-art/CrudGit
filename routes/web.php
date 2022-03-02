<?php

use App\Http\Controllers\CustomerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/newcustomer',[CustomerController::class,'newCustomer'])->name('newcustomer');
Route::post('/storecustomer',[CustomerController::class,'storeCustomer'])->name('storecustomer');
Route::get('/',[CustomerController::class,'index'])->name('customerlist');
Route::get('customeredit/{id}',[CustomerController::class,'editCustomer'])->name('customeredit');
Route::put('/customerupdate',[CustomerController::class,'updateCustomer'])->name('customerupdate');
Route::delete('/customerdestory/{id}',[CustomerController::class,'destory'])->name('customerdestory');

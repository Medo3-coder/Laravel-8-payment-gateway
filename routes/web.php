<?php

use App\Http\Controllers\PaypalController;
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
    return view('welcome');
});


// Route::post('/paypal' , [PaypalController::class , 'index'])->name('paypal_call');
// Route::get('/paypal/return' , [PaypalController::class , 'paypalReturn'])->name('paypal_return');
// Route::get('/paypal/cancel' , [PaypalController::class , 'paypalCancel'])->name('paypal_cancel');


Route::get('paywithpaypal', [PaypalController::class , 'payWithPaypal'])->name('paywithpaypal');
Route::post('paypal', [PaypalController::class , 'postPaymentWithpaypal'])->name('paypal');
Route::get('paypal', [PaypalController::class , 'getPaymentStatus'])->name('status');

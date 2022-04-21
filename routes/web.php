<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\FacilityController;
use App\Http\Controllers\Backend\Facility_roomController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\Type_roomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GoogleController;

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
    return redirect()->route('landing.page');
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::prefix('panel/admin')->group(function(){
            Route::resource('facility', FacilityController::class);
            Route::resource('facility-room', Facility_roomController::class);
            Route::resource('room', RoomController::class);
            Route::resource('type-room', Type_roomController::class);
        });
    });

    Route::middleware(['resepsionis'])->group(function () {
        Route::prefix('panel/resepsionis')->group(function(){
            Route::get('/', [ResepsionisController::class, 'index'])->name('panel.resepsionis');

            Route::get('/process/{id}', [ResepsionisController::class, 'process'])->name('process');
            Route::get('/verified/{id}', [ResepsionisController::class, 'verified'])->name('verified');
            Route::get('/failed/{id}', [ResepsionisController::class, 'failed'])->name('failed');

            Route::get('/check-in' , [ResepsionisController::class, 'CheckIn'])->name('CheckIn');
            Route::get('/check-in/{id}' , [ResepsionisController::class, 'toCheckIn'])->name('toCheckIn');

            // Route::get('/check-out' , [ResepsionisController::class, 'CheckOut'])->name('CheckOut');
            Route::get('/check-out/{id}' , [ResepsionisController::class, 'toCheckOut'])->name('toCheckOut');

            Route::get('/log-activity' , [ResepsionisController::class, 'logActifity'])->name('logActifity');
        });
    });


    Route::prefix('customer')->group(function(){
        Route::post('/pesan-kamar/{id}', [CustomerController::class, 'pesanKamar'])->name('bookNow');
        Route::get('/payment', [CustomerController::class, 'pay'])->name('payment');
        Route::get('/payment-all', [CustomerController::class, 'payAll'])->name('payment.all');
        Route::get('/invoice', [CustomerController::class, 'invoice'])->name('invoice');
        Route::get('/list-transaction', [CustomerController::class, 'listTransaction'])->name('listTransaction');
        Route::get('/log-activity', [CustomerController::class, 'log'])->name('logActifityUser');
        Route::get('/pay/{id}', [CustomerController::class, 'transactionPay'])->name('transactionPay');
        Route::get('/cencel/{id}', [CustomerController::class, 'cencelTransaction'])->name('cencelTransaksi');
        Route::get('/bukti-pembayaran/{id}', [CustomerController::class, 'buktiPembayaran'])->name('buktiPembayaran');
        Route::get('cetak-pdf/{id}', [CustomerController::class, 'cetakPdf'])->name('cetakPDF');
        Route::post('/upload-bukti', [CustomerController::class, 'uploadBukti'])->name('upload.bukti');
        Route::patch('/upload/{id}', [CustomerController::class, 'uploadProof'])->name('customer.upload');

    });


});

Route::prefix('guest')->group(function(){
    Route::get('/', [GuestController::class, 'landingPage'])->name('landing.page');
    Route::get('/{id}', [GuestController::class, 'type_room'])->name('type_room');

});
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'hendleGoogleCallback'])->name('google.callback');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

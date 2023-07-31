<?php

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


Route::get('login', function () {
    return view('login');
});

Route::get('ceklogin', function () {
    return view('ceklogin');
});

Route::get('logout', function () {
    return view('logout');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',function(){
    \Auth::logout();
    return redirect('/home');
});

Route::get('vila', function () {
    return view('vila');
});

Route::get('index', function () {
    return view('index');
});
// routes/web.php
// web.php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\VilaController;
// ... (kode rute lainnya)

Route::get('/vila', [VilaController::class, 'index'])->name('vila.index');
Route::get('/vila/create', [VilaController::class, 'create'])->name('vila.create');
Route::post('/vila', [VilaController::class, 'store'])->name('vila.store');
Route::get('/vila/{id}', [VilaController::class, 'show'])->name('vila.show');
Route::get('/vila/{id}/edit', [VilaController::class, 'edit'])->name('vila.edit');
Route::put('/vila/{id}', [VilaController::class, 'update'])->name('vila.update');
Route::delete('/vila/{id}', [VilaController::class, 'destroy'])->name('vila.destroy');
Route::get('/vilas/{vila}', [VilaController::class, 'show'])->name('vilas.show');

Route::get('/booking/{id}', [BookingController::class, 'booking'])->name('bookingVilla');
Route::get('/booking/form/{id}', [BookingController::class, 'showBookingForm'])->name('createBookingForm');
Route::post('/booking/store', [BookingController::class, 'createBooking'])->name('storeBooking');
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::get('/booking/{id}/edit', [BookingController::class, 'edit'])->name('editBooking');
Route::put('/booking/{id}', [BookingController::class, 'update'])->name('updateBooking');
Route::get('/booking/{id}/edit', [BookingController::class, 'edit'])->name('booking.edit');
Route::delete('/booking/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');
// Menampilkan halaman edit
// Mengupdate data booking
Route::put('/booking/{id}', [BookingController::class, 'update'])->name('updateBooking');


use App\Http\Controllers\PegawaiController;
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

use App\Http\Controllers\CustomerController;
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::prefix('customers')->group(function () {
    Route::get('vilas/{id}', [CustomerController::class, 'show'])->name('customers.vilas.show');
});
Route::group(['prefix' => 'customers'], function () {
    // Rute lainnya untuk customers

    // Rute untuk halaman detail vila
    Route::get('/vilas/{vila}', 'CustomerController@showVilaDetail')->name('customers.vilas.show');
    Route::get('/property-single/{id}', [CustomerController::class, 'showSingleProperty'])->name('property-single');

    // Rute untuk menyimpan data pemesanan
    Route::post('/booking', 'CustomerController@storeBooking')->name('customers.booking.storeBooking');
});
Route::post('/customers/vilas/{id}/booking', 'CustomerController@storeBooking')->name('customers.booking.storeBooking');
Route::post('/customers/vilas/{id}/booking', [CustomerController::class, 'storeBooking'])->name('customers.vilas.storeBooking');
Route::get('/customers/vilas/{id}/booking', [CustomerController::class, 'showBookingForm'])->name('customers.vilas.showBookingForm');
Route::post('/customers/vilas/{id}/booking', [CustomerController::class, 'storeBooking'])->name('customers.vilas.storeBooking');
// Tampilkan form pemesanan
Route::get('vilas/{id}/booking', 'BookingController@showBookingForm')->name('customers.vilas.booking');

// Simpan data pemesanan
Route::post('vilas/{id}/booking', 'BookingController@storeBooking')->name('customers.vilas.storeBooking');
Route::post('/booking', 'BookingController@store')->name('customers.vilas.storeBooking');

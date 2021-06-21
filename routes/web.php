<?php
use App\Http\Controllers\InfokampusController;

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
    return view('landing');
});


// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/masuk', function () {
    return view('pages.auth.login');
});

Route::get('/landing', function () {
    return view('landing');
});

// Route::get('/pemesanan', function () {
//     return view('filter');
// });

// Route::get('/pemesanansample', function () {
//     return view('pemesanan');
// });


Route::get('/keranjang', function () {
    return view('keranjang');
});

// Route::get('/rincian', function () {
//     return view('rincian');
// });

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/progress', function () {
    return view('progress');
});






// Route::get('auth/google',[\App\Http\Controllers\GoogleController::class,'redirectToGoogle'])->name('google.login');

// Route::get('auth/google/callback',[\App\Http\Controllers\GoogleController::class,'handleGoogleCallback'])->name('google.callback');

Auth::routes();



Route::resource('/pembeli', \App\Http\Controllers\PembeliController::class);
// Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);

Route::get('/pemesanan/searchnama','App\Http\Controllers\LandingController@searchnama')->middleware('auth');
Route::get('/pemesanan/searchlokasi','App\Http\Controllers\LandingController@searchlokasi')->middleware('auth');
Route::get('/pemesanan/searchopen','App\Http\Controllers\LandingController@searchopen')->middleware('auth');

Route::get('/pemesanan', [App\Http\Controllers\LandingController::class, 'pemesanan'])->name('pemesanan')->middleware('auth');
Route::get('/pemesanan/{id}', [App\Http\Controllers\LandingController::class, 'pemesananspesifik'])->name('pemesananspesifik')->middleware('auth');
Route::get('/rincian/{id}', [App\Http\Controllers\LandingController::class, 'rincianspesifik'])->name('rincianspesifik')->middleware('auth');
Route::post('/rincian/{id}', [App\Http\Controllers\LandingController::class, 'updaterincian'])->name('updaterincian')->middleware('auth');
Route::get('/pembayaran/{id}', [App\Http\Controllers\LandingController::class, 'konfirmasipembayaran'])->name('konfirmasipembayaran')->middleware('auth');


Route::get('/keranjang', [App\Http\Controllers\LandingController::class, 'keranjang'])->name('keranjang');
Route::get('/keranjang/{id}', [App\Http\Controllers\LandingController::class, 'keranjangspesifik'])->name('keranjangspesifik');


Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('user.index');
Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/infokampus', [\App\Http\Controllers\HomeController::class, 'infokampus'])->name('infokampus');
Route::get('/forminfokampus', [\App\Http\Controllers\HomeController::class, 'forminfokampus'])->name('forminfokampus')->middleware('is_admin');

Route::resource('admin/informasi-toko', \App\Http\Controllers\TokoController::class)->middleware('is_admin');

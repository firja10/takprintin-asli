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


Route::get('/clear',function(){
   Artisan::call('cache:clear');
   Artisan::call('config:cache');
});

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
Route::get('/pemesanan/searchbuka','App\Http\Controllers\LandingController@searchbuka')->middleware('auth');
Route::get('/pemesanan/searchtutup','App\Http\Controllers\LandingController@searchtutup')->middleware('auth');


Route::get('/pemesanan', [App\Http\Controllers\LandingController::class, 'pemesanan'])->name('pemesanan')->middleware('auth');
Route::get('/pemesanan/{id}', [App\Http\Controllers\LandingController::class, 'pemesananspesifik'])->name('pemesananspesifik')->middleware('auth');
Route::get('/rincian/{id}', [App\Http\Controllers\LandingController::class, 'rincianspesifik'])->name('rincianspesifik')->middleware('auth');
Route::post('/rincian/{id}', [App\Http\Controllers\LandingController::class, 'updaterincian'])->name('updaterincian')->middleware('auth');
Route::get('/pembayaran/{id}', [App\Http\Controllers\LandingController::class, 'konfirmasipembayaran'])->name('konfirmasipembayaran')->middleware('auth');
Route::get('/update-pembayaran/{id}', [App\Http\Controllers\LandingController::class, 'editpembayaran'])->name('editpembayaran')->middleware('auth');
Route::post('/update-pembayaran/{id}', [App\Http\Controllers\LandingController::class, 'updatepembayaran'])->name('updatepembayaran')->middleware('auth');
Route::get('/progress/{id}', [App\Http\Controllers\LandingController::class, 'progressproduk'])->name('progressproduk')->middleware('auth');
Route::post('/progress/{id}', [App\Http\Controllers\LandingController::class, 'updateprogress'])->name('updateprogress')->middleware('auth');
Route::get('/pemberian-rating/{id}', [App\Http\Controllers\LandingController::class, 'editrating'])->name('editrating')->middleware('auth');
Route::post('/pemberian-rating/{id}', [App\Http\Controllers\LandingController::class, 'updaterating'])->name('updaterating')->middleware('auth');



Route::get('/keranjang', [App\Http\Controllers\LandingController::class, 'keranjang'])->name('keranjang');
Route::get('/keranjang/{id}', [App\Http\Controllers\LandingController::class, 'keranjangspesifik'])->name('keranjangspesifik');


//WARNING, KHUSUS !!

Route::post('/pemesanan', [App\Http\Controllers\LandingController::class, 'updatejam'])->name('updatejam');



Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('user.index');
Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/infokampus', [\App\Http\Controllers\HomeController::class, 'infokampus'])->name('infokampus');
Route::get('/forminfokampus', [\App\Http\Controllers\HomeController::class, 'forminfokampus'])->name('forminfokampus')->middleware('is_admin');

Route::resource('admin/informasi-toko', \App\Http\Controllers\TokoController::class)->middleware('is_admin');
Route::get('admin/informasi-pembeli', [\App\Http\Controllers\LandingController::class,'indexpembeli'])->name('indexpembeli')->middleware('is_admin');
Route::post('admin/informasi-pembeli/{id}', [\App\Http\Controllers\LandingController::class,'updateadminpembayaran'])->name('updateadminpembayaran')->middleware('is_admin');
Route::get('admin/informasi-progress', [\App\Http\Controllers\LandingController::class,'kumpulanprogress'])->name('kumpulanprogress')->middleware('is_admin');
Route::get('admin/daftar-user', [\App\Http\Controllers\LandingController::class,'daftaruser'])->name('daftaruser')->middleware('is_admin');
Route::post('admin/daftar-user/{id}', [\App\Http\Controllers\LandingController::class,'jadikanadmin'])->name('jadikanadmin')->middleware('is_admin');
Route::post('admin/informasi-progress/{id}', [\App\Http\Controllers\LandingController::class,'verifprogress'])->name('verifprogress')->middleware('is_admin');


Route::get('admin/informasi-pembeli/{id}/download', [\App\Http\Controllers\LandingController::class,'downloadfile'])->name('downloadfile')->middleware('is_admin');

Route::get('admin/informasi-pembeli/{id}/destroy', [\App\Http\Controllers\LandingController::class,'hapusorder'])->name('hapusorder')->middleware('is_admin');







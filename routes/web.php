<?php
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::controller(AuthController::class)->group(function(){
  Route::get('register','register')->name('register');
  Route::post('register','registerSimpan')->name('register.simpan');

  Route::get('login','login')->name('login');
  Route::post('login','loginAksi')->name('login.aksi');

  Route::get('logout', 'logout')->middleware('auth')->name('logout');


});

Route::get('/', function () {
    return view('welcome');
});


  //DASHBOARD
  Route::middleware('auth')->group(function () {
	Route::get('dashboard', function () {
		return view('dashboard');
    })->name('dashboard');


  //TIKET 

    Route::controller(TiketController::class)->prefix('tiket')->group( function () {
      Route::get('','index')->name('tiket');
      Route::get('tambah', 'tambah')->name('tiket.tambah');
      Route::post('tambah', 'simpan')->name('tiket.tambah.simpan');
      Route::get('edit/{id}', 'edit')->name('tiket.edit');
      Route::post('edit/{id}', 'update')->name('tiket.tambah.update');
      Route::get('hapus/{id}', 'hapus')->name('tiket.hapus');
    });

  });


<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\siswa;
use App\Http\Controllers\dataGuru;
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

Route::group(['middleware' => ['guru']], function () {
    Route::controller(siswa::class)->group(function () {
        Route::get("/halamanguru/beranda", "index")->name("halamanguru.beranda");
        Route::get("/halamanguru/siswa/tambah", "create")->name("siswa.tambah");
        Route::get("/halamanguru/siswa/edit/{id}", "edit")->name("siswa.edit");

        Route::post("/halamanguru/siswa/store", "store")->name("siswa.store");
        Route::post("/halamanguru/siswa/update/{id}", "update")->name("siswa.update");
        Route::get("/halamanguru/siswa/delete/{id}", "destroy")->name("siswa.delete");
        Route::get('/rekapkuis', 'rekapkuis')->name('rekapkuis');
        Route::get("/rekapkuis/{kelas}", "rekapkuis")->name('kelas.rekapkuis');

        // api
        Route::get("/siswa/get", 'getDataSiswa')->name("siswa.get");
        Route::get("/siswa/get/{kelas}", 'getDataSiswa')->name("siswa.get");
        Route::post("/siswa/store","storeDataSiswa")->name("siswa.store");
        Route::delete("/siswa/delete/{id}","deleteDataSiswa")->name("siswa.delete");
        Route::get("/siswa/edit/{id}","getDataSiswaById")->name("siswa.edit");
        Route::post("/siswa/update/{id}","updateDataSiswa")->name("siswa.update");

    });

    Route::controller(dataGuru::class)->group(function(){
        Route::get("/halamanguru/rekapevaluasi", "getRekap")->name("rekapevaluasi");
    });

    Route::get('/rekapevaluasi', function () {
        return view('pages.beranda.rekapevaluasi');
    })->name('rekapevaluasi');



})->name("halamanguru");

Route::get('/beranda', function () {
    return view('pages.beranda.home');
})->name('pages.beranda.home');

Route::get('/', function () {
    return redirect(route('pages.beranda.home'));
});


Route::group(["middleware" => ["auth"]], function () {
    Route::get('/materi1', function () {
        return view('pages.materi.bab1');
    })->name("materi");

    Route::get('/kuis1', function () {
        return view('pages.materi.kuis1');
    });

    Route::get('/kuis2', function () {
        return view('pages.materi.kuis2');
    });

    Route::get('/kuis3', function () {
        return view('pages.materi.kuis3');
    });

    Route::get('/kuis4', function () {
        return view('pages.materi.kuis4');
    });

    Route::get('/materi2', function () {
        return view('pages.materi.bab2');
    });

    Route::get('/materi3', function () {
        return view('pages.materi.bab3');
    });

    Route::get('/materi4', function () {
        return view('pages.materi.bab4');
    });


    Route::get('/capaian', function () {
        return view('pages.capaian.capaian');
    });

    Route::get('/informasi', function () {
        return view('pages.capaian.informasi');
    });

});





// Route::get('/', function () {
//     return view('pages.login.register');
// });

// Route::get('/', function () {
//     return view('pages.login.login');
// });

Route::get('/capaian', function () {
    return view('pages.capaian.capaian');
});

Route::get('/login', [LoginController::class, "indexL"])->name("auth.indexL");
Route::post('/login', [LoginController::class, "authenticate"])->name("auth.login");

Route::get('/register', [LoginController::class, "indexR"])->name("auth.indexR");
Route::post('/register', [LoginController::class, "store"])->name("auth.register");

// Route::get('/logout', [LoginController::class, "indexL"])->name("auth.indexL");
Route::get('/logout', [LoginController::class, "logout"])->name("auth.logout");
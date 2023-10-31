<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hello', function () {
    return "Hello World Loler";
});

Route::get('/awal', function () {
    return redirect()->route('destination');
});

Route::get('/tujuan', function () {
    return 'Tujuan';
})->name('destination');

//Route::redirect('/awal', '/tujuan');

Route::get('/user/{name}', function ($theName) {
    return "User: " . $theName;
});

Route::get('/students/{nim}/{nama}/{prodi}', function ($theNim, $theNama, $theProdi) {
    return "NIM: " . $theNim . "<br /> Nama: " . $theNama . "<br /> Prodi: " . $theProdi;
});

Route::get('/students/nama/{nama?}', function ($theNama = "Furina") {
    return $theNama;
});

Route::get('/students/prodi/{prodi?}', function ($theProdi = "IF") {
    return $theProdi;
});


//Latihan Tugas

Route::get('fakultas/{fakultas}/prodi/{prodi}/mhs/{nim}/{nama}', function ($theFakultas, $theProdi, $theNim, $theNama) {
    return "NIM: " . $theNim . "<br /> Nama: " . $theNama . "<br /> Prodi: " . $theProdi . "<br /> Fakultas: " . $theFakultas;
});

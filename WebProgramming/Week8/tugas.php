<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/students/{nim}/{nama}/{prodi}/{Fakultas}', function ($theNim, $theNama, $theProdi, $theFakultas) {
    return "NIM: " . $theNim . "<br /> Nama: " . $theNama . "<br /> Prodi: " . $theProdi . "<br /> Fakutlas: " . $theFakultas;
}); */

Route::get('fakultas/{fakultas}/prodi/{prodi}/mhs/{nim}/{nama}', function ($theFakultas, $theProdi, $theNim, $theNama) {
    return "NIM: " . $theNim . "<br /> Nama: " . $theNama . "<br /> Prodi: " . $theProdi . "<br /> Fakultas: " . $theFakultas;
});

 /*
Route::get('mhs/{nama}', function ($theNama) {
    return "<br /> Nama: " . $theNama;
});

Route::get('prodi/{prodi}', function ($theProdi) {
    return "<br /> Prodi: " . $theProdi;
});

Route::get('fakultas/{fakultas}', function ($theFakultas) {
    return "<br /> Fakultas: " . $theFakultas;
});
*/
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return view('ftik');
});

Route::get('/info', function () {
    return view('info', ['progdi' => 'TI']);
});

Route::get('/info/{kd}', [InfoController::class, 'infoMhs']);

// Route::get('/buku', function () {
//     return view('buku.add', [
//         'is_update' => 0,
//         'optkategori' => [
//             '' => '-Pilih salah satu-',
//             'novel' => 'Novel',
//             'komik' => "Komik",
//             'kamus' => "Kamus",
//             'program' => 'Pemrograman'
//         ]
//     ]);
// });

use App\Http\Controllers\BukuController;
Route::get('buku', [BukuController::class, 'index']);
Route::get('buku/add', [BukuController::class, 'add_new']);
Route::post('buku/save', [BukuController::class, 'save']);
Route::get('buku/edit/{id}', [BukuController::class, 'edit']);
Route::get('buku/delete/{id}', [BukuController::class, 'delete']);
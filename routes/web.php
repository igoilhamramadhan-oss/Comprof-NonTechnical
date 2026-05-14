<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;

// Route::get('/', function () {
//     return redirect('divisi/non-tech');
// });

// Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi.index');

// Rute untuk halaman Divisi Non-Technical
// Route::get('/divisi/non-tech', function () {
//     return view('mainPage.non-tech'); 
// // });

// Route::get('/', function () {
//     return redirect('/divisi/non-tech');
// });

Route::get('/divisi/non-tech', function () {
    return view('divisi.non-tech');
});

Route::get('/dashboard', function(){
    return view('divisi.dashboard');
});

Route::get('/', function () {
    return view('divisi');
});
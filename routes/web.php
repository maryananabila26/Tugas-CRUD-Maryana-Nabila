<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BarangController::class, 'index']); 
Route::get('/barang/add', function () {
    return view('add');
});
Route::resource('barang',BarangController::class);

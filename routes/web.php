<?php

use App\Livewire\CategoryMain;
use App\Livewire\Dashboard\Main;
use App\Livewire\ProductMain;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('vermas','vermas');
Route::view('carrito','carrito');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',Main::class)->name('dashboard');
    Route::get('/productos',ProductMain::class)->name('productos');
    Route::get('/categorias',CategoryMain::class)->name('categorias');
});

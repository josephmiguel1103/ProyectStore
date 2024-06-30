<?php

use App\Http\Controllers\ComputadorasController;
use App\Livewire\CategoryMain;
use App\Livewire\Dashboard\Main;
use App\Livewire\IndexLivewire;
use App\Livewire\ProductMain;
use Illuminate\Support\Facades\Route;

//  Route::get('/', function () {
//     return view('welcome');
// });
Route::view('vermas','vermas');
//Route::view('carrito','carrito');

//Categorias
Route::view('computadoras', 'livewire.categories.computadoras');
Route::view('tabletas','livewire.categories.tabletas');
Route::view('drones_camaras','livewire.categories.drones_camaras');
Route::view('audio','livewire.categories.audio');
Route::view('celulares','livewire.categories.celulares');
Route::view('tvcine','livewire.categories.tvcine');
Route::view('portatiles','livewire.categories.portatiles');
Route::view('ofertas','livewire.categories.ofertas');
Route::view('audifonos','livewire.categories.audifonos');
Route::view('accesorios','livewire.categories.accesorios');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',Main::class)->name('dashboard');
    Route::get('/productos',ProductMain::class)->name('productos');
    Route::get('/categorias',CategoryMain::class)->name('categorias');

    //Route::get('/computadoras', [ComputadorasController::class, 'index'])->name('computadoras.index');

    Route::get('/', function () {
        return view('navigation'); // Cambia 'welcome' por la vista que corresponde a tu página principal
    })->name('/');
});

Route::get('/',[IndexLivewire::class,'render'])->name('index');

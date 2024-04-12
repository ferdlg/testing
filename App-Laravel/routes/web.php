<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompradorController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// compradores
Route::middleware(['auth','role:comprador'])->group(function(){
    Route::get('/inicio_comprador',[CompradorController::class,'index'])->name('comprador.inicio');
});

//vendedores
Route::middleware(['auth','role:vendedor'])->group(function(){
    Route::get('/inicio_vendedor',[VendedorController::class,'index'])->name('vendedor.inicio');
});

Route::middleware(['auth', 'role:vendedor'])->group(function () {
    Route::post('/vehiculos', [VendedorController::class, 'registrarVehiculo'])->name('vehiculos.store');
});
Route::middleware(['auth', 'role:vendedor'])->group(function ()
{
    Route::put('/vehiculos/{placa}', [VendedorController::class, 'actualizarVehiculo'])->name('vehiculos.actualizar');
});
Route::middleware(['auth', 'role:vendedor'])->group(function () {
    Route::delete('/vehiculos/{placa}', [VendedorController::class, 'eliminarVehiculo'])->name('vehiculos.eliminar');
});
Route::get('/vehiculos/filtrar-por-precio', [VendedorController::class, 'filtrarPorPrecio'])->name('comprador.vehiculosPorPrecio');

//usuario con ambos roles 
Route::get('/ini_comprador_vendedor', 'VendedorController@inicioCompradorVendedor')
    ->name('inicio.comprador.vendedor')
    ->middleware(['auth', 'role:comprador,vendedor']);


Route::get('/ini_comprador_vendedor', 'VendedorController@inicioCompradorVendedor')->name('inicio.comprador.vendedor');

// ruta para actualizar los datos del perfil del vendedor

Route::post('/editarPerfilVendedor', 'VendedorController@editarPerfilVendedor')->name('editarPerfilVendedor');

// Ruta para cerrar sesión
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

// Ruta para la página de inicio pública
Route::get('/', function () {
    return view('/layouts/welcome');
});

// Ruta para la página de inicio de sesión
Auth::routes();

// Ruta para la página de inicio de usuario autenticado 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

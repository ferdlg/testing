<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class CompradorController extends Controller
{
    public function index()
    {
        return view('inicio_comprador');
    }

    public function vehiculosPorCategoria($categoriaId)
    {
    $vehiculos = Vehiculo::where('catId', $categoriaId)->get();
    return view('vista_con_vehiculos', compact('vehiculos'));
    }
    public function vehiculosPorPrecio(Request $request)
    {
    $minPrecio = $request->input('min');
    $maxPrecio = $request->input('max');

    $vehiculos = Vehiculo::whereBetween('vehPrecio', [$minPrecio, $maxPrecio])->get();

    return view('inicio_comprador', compact('vehiculos'));
    }
    public function mostrarVehiculos()
{
    $vehiculos = Vehiculo::all(); // vehículos desde la base de datos
    return view('inicio_comprador', compact('vehiculos'));
}

}

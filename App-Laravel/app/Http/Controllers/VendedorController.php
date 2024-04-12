<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function index()
    {
        $categoria = Categoria::all(); 
        $vehiculos = Vehiculo::all();
        $user = auth()->user(); 
        $datosPersonales = $user->datosPersonales; 
        return view('inicio_vendedor', ['categoria' => $categoria, 'vehiculos'=> $vehiculos, 'user'=> $user, 'datosPersonales'=> $datosPersonales]); 
    }
 
    public function inicioCompradorVendedor()
{
    return view('inicio_comprador_vendedor'); // C
}



    public function editarPerfilVendedor(Request $request)
    {
        //Validar los datos
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
        ]);

        $usuario = auth()->user();

        //guardar los datos editados
        $datosPersonales = $usuario->datosPersonales;
        $datosPersonales->update([
        'datNombre' => $request->input('nombre'),
        'datApellido' => $request->input('apellido'),
        'datTelefono' => $request->input('telefono'),
        'datCorreo' => $request->input('correo'),
    ]);
    //permanecer luego de actualizar datos
    return back()->with('success', 'Perfil actualizado correctamente');
    }

    //registrar un auto 
    public function registrarVehiculo(Request $request)
{
    $request->validate([
        'placa' => 'required|unique:vehiculo,vehPlaca',
        'modelo' => 'required|integer',
        'marca' => 'required|string',
        'color' => 'required|string',
        'estado' => 'required|string',
        'precio' => 'required|integer',
        'categoria' => 'required|exists:categoria,catId',
    ]);

    if(auth()->check() && auth()->user()->datosPersonales) {
        $user = auth()->user(); 
        $datosPersonales = $user->datosPersonales; 

        Vehiculo::create([
            'vehPlaca' => $request->input('placa'),
            'datId' => $datosPersonales->datId,
            'catId' => $request->input('categoria'),
            'vehModelo' => $request->input('modelo'),
            'vehMarca' => $request->input('marca'),
            'vehColor' => $request->input('color'),
            'vehEstado' => $request->input('estado'),
            'vehPrecio' => $request->input('precio'),
        ]);

        return back()->with('success', 'Vehículo registrado correctamente');
    } else {
        // Manejar el caso donde el usuario no está autenticado o no tiene datos personales asociados
        return back()->with('error', 'Error al registrar el vehículo. Por favor, inicie sesión o complete su perfil.');
    }
}
public function editarVehiculo(Request $request, $placa)
{
    $vehiculo = Vehiculo::where('vehPlaca', $placa)->first();
    $request->validate([
        'modelo' => 'required|integer',
        'marca' => 'required|string',
        'color' => 'required|string',
        'estado' => 'required|string',
        'precio' => 'required|integer',
        'categoria' => 'required|exists:categoria,catId',
    ]);


    if (!$vehiculo) {
        return back()->with('error', 'El vehículo no existe.');
    }

    $vehiculo->update([
        'catId' => $request->input('categoria'),
        'vehModelo' => $request->input('modelo'),
        'vehMarca' => $request->input('marca'),
        'vehColor' => $request->input('color'),
        'vehEstado' => $request->input('estado'),
        'vehPrecio' => $request->input('precio'),
    ]);

    return back()->with('success', 'Vehículo actualizado correctamente');
}
    public function eliminarVehiculo($placa)
{
    $vehiculo = Vehiculo::where('vehPlaca', $placa)->first();

    if (!$vehiculo) {
        return back()->with('error', 'El vehículo no existe.');
    }

    $vehiculo->delete();

    return back()->with('success', 'Vehículo eliminado correctamente');
}


}
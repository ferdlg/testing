<?php

namespace Tests\Unit;

use App\Http\Controllers\VendedorController;
use App\Models\Categoria;
use App\Models\Vehiculo;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\Auth\LoginController;


class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test para redirección después del inicio de sesión como comprador y vendedor.
     *
     * @return void
     */
    public function test_redireccion_despues_inicio_sesion_comprador_vendedor()
    {
        $user =auth()->user();
        $this->actingAs($user);

        $controller = new LoginController();
        $redirect = $controller->redirectTo();

        $this->assertEquals(route('inicio.comprador.vendedor'), $redirect);
    }

    /**
     * Test para redirección después del inicio de sesión como comprador.
     *
     * @return void
     */
    public function test_redireccion_despues_inicio_sesion_comprador()
    {
        $user =auth()->user(); // Crea aquí un usuario con roles de comprador
        $this->actingAs($user);

        $controller = new LoginController();
        $redirect = $controller->redirectTo();

        $this->assertEquals(route('comprador.inicio'), $redirect);
    }

    /**
     * Test para redirección después del inicio de sesión como vendedor.
     *
     * @return void
     */
    public function test_redireccion_despues_inicio_sesion_vendedor()
    {
        $user =auth()->user(); 
        $this->actingAs($user);

        $controller = new LoginController();
        $redirect = $controller->redirectTo();

        $this->assertEquals(route('vendedor.inicio'), $redirect);
    }
}
class VendedorControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test para la edición de un vehículo.
     *
     * @return void
     */
    public function test_editar_vehiculo()
    {
        $vehiculo = Vehiculo::factory()->create();

        $nuevosDatos = [
            'modelo' => 'Nuevo Modelo',
            'marca' => 'Nueva Marca',
            'color' => 'Nuevo Color',
            'estado' => 'Nuevo Estado',
            'precio' => 10000,
            'categoria' => 1,
        ];

        $controller = new VendedorController();
        $response = $controller->editarVehiculo(app('request')->merge($nuevosDatos), $vehiculo->vehPlaca);

        $vehiculoActualizado = Vehiculo::find($vehiculo->vehPlaca);
        $this->assertEquals($nuevosDatos['modelo'], $vehiculoActualizado->vehModelo);
        $this->assertEquals($nuevosDatos['marca'], $vehiculoActualizado->vehMarca);
        $this->assertEquals($nuevosDatos['color'], $vehiculoActualizado->vehColor);
        $this->assertEquals($nuevosDatos['estado'], $vehiculoActualizado->vehEstado);
        $this->assertEquals($nuevosDatos['precio'], $vehiculoActualizado->vehPrecio);
        $this->assertEquals($nuevosDatos['categoria'], $vehiculoActualizado->catId);

        $response->assertRedirect();
    }
    
    /**
     * Test para la eliminación de un vehículo.
     *
     * @return void
     */
    public function testEliminarVehiculo()
    {
        $vehiculo = factory(\App\Models\Vehiculo::class)->create();
        $response = $this->delete('/eliminar-vehiculo/' . $vehiculo->vehPlaca);
    
        $this->assertDatabaseMissing('vehiculos', [
            'vehPlaca' => $vehiculo->vehPlaca
        ]);
    }
    public function testFiltrarPorCategoria()
    {
        $Todoterreno = Categoria::first(2);
        $Camioneta = Categoria::first(1);

        $vehiculo1 = Vehiculo::factory()->create(['catId' => $Todoterreno->catId]);
        $vehiculo2 = Vehiculo::factory()->create(['catId' => $Todoterreno->catId]);
        $vehiculo3 = Vehiculo::factory()->create(['catId' => $Camioneta->catId]);

        $response = $this->get('/filtrar-vehiculos-por-categoria/' . $Todoterreno->catId);
        $response = $this->get('/filtrar-vehiculos-por-categoria/' . $Camioneta->catId);

        $response->assertStatus(200);
        $response->assertSee($vehiculo1->vehPlaca);
        $response->assertSee($vehiculo2->vehPlaca);
        $response->assertDontSee($vehiculo3->vehPlaca);
    }
}

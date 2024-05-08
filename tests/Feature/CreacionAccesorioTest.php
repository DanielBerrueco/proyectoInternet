<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;
use App\Models\Accessory;

class CreacionAccesorioTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test para verificar la creación de un accesorio y redireccionamiento.
     */
    public function test_creacion_accesorio_y_redireccionamiento(): void
    {
        // Obtener un usuario de la base de datos utilizando el seeder
        $user = User::where('email', 'example@test.com')->first();

        // Autenticar al usuario
        $this->actingAs($user);

        // Obtener datos de accesorio de tu seeder (supongamos que el seeder se llama AccessorySeeder)
        $datosAccesorio = [
            'nombre' => 'Accesorio de prueba',
            'stock' => 99,
            'minimo' => 99,
            'ubicacion' => 'PRUEBA'
        ];

        // Enviar una solicitud POST para crear el accesorio
        $response = $this->post(route('accessory.store'), $datosAccesorio);

        // Verificar que se haya creado el registro en la base de datos
        $this->assertDatabaseHas('accessories', $datosAccesorio);

        // Verificar que se redirecciona correctamente
        $response->assertRedirect(route('accessory.index'));

        // Opcional: Verificar otros aspectos según tus requisitos
    }
}

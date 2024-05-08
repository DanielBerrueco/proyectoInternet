<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RutaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_order_index_route(): void
    {
        // Obtener el usuario creado a través del seeder
        $user = User::where('email', 'example@test.com')->first();

        // Autenticar al usuario obtenido
        $this->actingAs($user);

        // Acceder a la ruta order.index
        $response = $this->get(route('order.index'));

        // Verificar que se devuelva el código de estado 200
        $response->assertStatus(200);
    }
}

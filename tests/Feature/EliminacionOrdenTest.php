<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;
use App\Models\Order;

class EliminacionOrdenTest extends TestCase
{
    use DatabaseTransactions;

    public function test_eliminacion_orden_y_redireccionamiento(): void
    {
        // Crear un usuario (puedes ajustar esto según tus necesidades)
        $user = User::where('email', 'example@test.com')->first();
        $this->actingAs($user);

        // Obtener el accesorio con ID 1 (o el ID que desees probar)
        $orden = Order::findOrFail(1);

        // Enviar una solicitud DELETE para eliminar el accesorio específico
        $response = $this->delete(route('order.destroy', $orden->id));

        // Verificar que se haya eliminado el registro de la base de datos
        $this->assertDatabaseMissing('orders', [
            'id' => $orden->id,
        ]);

        // Verificar que se redirecciona correctamente
        $response->assertRedirect(route('order.index'));

        echo 'Orden eliminada correctamente y redireccionada.';
    }
}



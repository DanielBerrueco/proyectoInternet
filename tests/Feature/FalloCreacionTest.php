<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;


class FalloCreacionTest extends TestCase
{
        use DatabaseTransactions;

        public function test_creacion_accesorio_y_redireccionamiento(): void
        {
           
            $user = User::where('email', 'example@test.com')->first();
    
            $this->actingAs($user);
            $datosAccesorioInvalidos = [
                'nombre' => '', // nombre vacío
                'stock' => -5, // stock negativo (inválido)
                'minimo' => 0, // debe ser entero (cambiado de '0' a 0)
                'ubicacion' => 123 // debe ser un string
            ];
    
            // Enviar una solicitud POST con datos inválidos para crear el accesorio
            $responseInvalido = $this->post(route('accessory.store'), $datosAccesorioInvalidos);
    
            // Verificar que se haya mostrado un error de validación
            $responseInvalido->assertSessionHasErrors(['nombre', 'stock', 'minimo', 'ubicacion']); 
        }
}

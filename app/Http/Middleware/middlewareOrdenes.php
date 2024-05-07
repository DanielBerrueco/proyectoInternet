<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class middlewareOrdenes
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado y tiene el puesto "Enfermero"
        if (auth()->check() && auth()->user()->puesto === 'Enfermero') {
            return $next($request);
        }

        // Si no cumple con las condiciones, redirige a una página de error o a otra ruta
        return redirect()->route('order');
 // Puedes cambiar 'error' por la ruta que desees
    }
}

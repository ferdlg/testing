<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
      /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param string $role
     */

    public function handle(Request $request, Closure $next, $role): Response
    {
        //verificar que el usuario haya iniciado sesion
        if (!$request->user()){
            return redirect('/login');
        }

        //saber el rol del usuario
        $userRole = $request->user()->roles->pluck('rolTipo')->first();
        
        //verificar si el rol del usuario es el adecuado
        if($userRole !== $role){
            abort(403, 'Acceso restringido.');
        }
        return $next($request);
    }
}

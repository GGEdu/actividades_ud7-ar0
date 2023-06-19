<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Api;
use Illuminate\Support\Facades\View;

class ApisMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $sel_api = $request->query('sel_api');

        $apis = Api::when($sel_api, function ($query, $sel_api) {
                return $query->where('name', 'like', "%{$sel_api}%");
            })
            ->orderBy('name')
            ->paginate(10);

        // Agregar la variable 'apis' a todas las vistas
        view()->share('apis', $apis);

        return $next($request);
    }
}

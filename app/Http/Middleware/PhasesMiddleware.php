<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;
use Illuminate\Support\Facades\View;

class PhasesMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $phases = Activity::select('phase')->distinct()->get();

        // Agregar la variable 'sections' a todas las vistas
        view()->share('phases', $phases);

        return $next($request);
    }
}

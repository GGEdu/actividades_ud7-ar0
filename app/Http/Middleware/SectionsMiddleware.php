<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Section;
use Illuminate\Support\Facades\View;

class SectionsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        $sel_section = $request->query('sel_section');

        $sections = Section::where('user_id', $user->id)
            ->when($sel_section, function ($query, $sel_section) {
                return $query->where('name', 'like', "%{$sel_section}%");
            })
            ->orderBy('name')
            ->paginate(10);

        // Agregar la variable 'sections' a todas las vistas
        view()->share('sections', $sections);

        return $next($request);
    }
}

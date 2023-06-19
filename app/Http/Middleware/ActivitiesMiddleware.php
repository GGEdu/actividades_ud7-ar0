<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;
use Illuminate\Support\Facades\View;

class ActivitiesMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $sel_activity = $request->query('sel_activity');

        $activities = Activity::when($sel_activity, function ($query, $sel_activity) {
                return $query->where('name', 'like', "%{$sel_activity}%");
            })
            ->paginate(10);

        view()->share('activities', $activities);

        return $next($request);
    }
}

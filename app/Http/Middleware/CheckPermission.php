<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPermission
{

    public function handle(Request $request, Closure $next, $permission)
    {
//        if (auth()->user() === null) {
//            abort(403);
//        }
        if (!auth()->user()->role->hasPermission($permission)) {
            abort(403);
        }
        return $next($request);
    }

}

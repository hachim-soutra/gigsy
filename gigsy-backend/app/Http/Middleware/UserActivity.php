<?php

namespace App\Http\Middleware;

use Closure;
use Cache;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache as FacadesCache;

class UserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $expiresAt = now()->addMinutes(2); /* keep online for 2 min */
            FacadesCache::put('user-is-online-' . auth()->user()->id, true, $expiresAt);
            User::where('id', auth()->user()->id)->update(['last_seen' => now()]);
        }

        return $next($request);
    }
}

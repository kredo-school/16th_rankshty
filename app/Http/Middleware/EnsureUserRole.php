<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        $user = Auth::user();

         // ログインしていない or ロールが違う場合は403
         if(!$user || $user->role->role_name !== $role)
         {
            abort(403, 'このページにアクセスする権限がありません。');
         }
        
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && $request->user()->role === 'teacher') {
            return $next($request);
        }
        elseif ($request->user() && $request->user()->role === 'admin') {
            return redirect('admindashboard');
        }
        elseif ($request->user() && $request->user()->role === 'stagiaire') {
            return redirect('stagiaire\\stagiairedashboard');
            
        }
        else {
            abort(403, 'Unauthorized');

        }
    }
}

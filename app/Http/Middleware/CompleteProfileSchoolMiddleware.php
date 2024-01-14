<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CompleteProfileSchoolMiddleware
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
        $school = User::where('id', userConnect()->id)
            ->first();

        if ($school->address != NULL) {
            return $next($request);
        } else {
            alert()->error('Oops...', 'Antes de agregar alumnos debe al menos agregar un profesor!');
            return redirect('/colegio');
        }
    }
}

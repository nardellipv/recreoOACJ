<?php

namespace App\Http\Middleware;

use App\Models\Teacher;
use Closure;
use Illuminate\Http\Request;

class RegisterTeacherMiddleware
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
        {
            $teacher = Teacher::where('user_id', userConnect()->id)
                ->first();

            if ($teacher != NULL) {
                return $next($request);
            } else {
                alert()->error('Oops...', 'Por favor agregar profesor antes de continuar!');
                return redirect('/profesor-agregar');
            }
        }
    }
}

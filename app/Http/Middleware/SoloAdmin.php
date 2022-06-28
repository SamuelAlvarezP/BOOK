<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloAdmin
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
        switch(Auth::user()->role){
            case('Administrador'):
                return redirect()->route('admin.home');
                break;
            case('Estudiantes'):
                return redirect()->route('dashboard');
                break;
            case('Docentes'):
                return redirect()->route('docente.index');
                break;
        }
    }
}

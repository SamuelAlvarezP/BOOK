<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

//   protected $redirectTo = RouteServiceProvider::HOME;
public function redirectTo(){
    $rol = Auth::user()->role;
    switch($rol){
        case 'Administrador':
            return '/admin';
            break;
        case 'Docente':
            return '/dashboard/docente';
            break;
        case 'Estudiante':
            return '/dashboard';
            break;
    }
}
 public function __construct()
 {
    $this->middleware('guest')->except('logout');
 }
}

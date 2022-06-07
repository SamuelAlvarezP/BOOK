<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticated($request ,$user){
        if($user->role==('admin')){
            return redirect()->route('dashboard');
        }elseif($user->role=='docente'){
            return redirect()->route('docente');
        }elseif($user->role=='estudiante'){
            return redirect()->route('estudiante');
        }
    }
}

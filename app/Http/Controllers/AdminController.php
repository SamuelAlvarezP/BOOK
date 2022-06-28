<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('soloadmin',['only' =>['Index']]);

    }
    public function Index(){
        return view('admin.index');
    }
}

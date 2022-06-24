<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showTest(){
        $test = Test::where('user_id',auth()->user()->id);
        return view('test.showtest');
    }
    public function store(Request $request){
        $test = new Test();
        if($request->decoration){
            $request = 'visual';
        }else{
            if ($request->mañanitas) {
                $request = 'auditivo';
            }else{
                if($request->abrazar){
                    $request = 'kinestésico';
                }
            }
        }
        $test->aprendizaje = $request;
        $test->user_id = auth()->user()->id;
        $test->save();
        return redirect()->view('dashboard',compact('test'))->with('info','Test de aprendizaje completo');
    }
}

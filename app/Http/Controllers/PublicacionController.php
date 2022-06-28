<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Publicacion;
use Illuminate\Http\Request;
use App\Http\Requests\StorePublicacionRequest;

class PublicacionController extends Controller
{
    public function crearPublicacion(Curso $curso){
        return view('docente.publicacion', compact('curso'));
    }
    public function store(StorePublicacionRequest $request){
    Publicacion::create($request->all());
      return redirect()->route('mostrar.publicacion')->with('info','Publicación creada con éxito');


    }
    public function mostrarPublicacion(Curso $curso){
        $publicacion = Publicacion::where('curso_id',$curso->id);
        return view('docente.mostrar_publicacion',compact('publicacion'));
    }
    public function destroy(Publicacion $publicacion){
        $publicacion->delete();
        return redirect()->route('mostrar.publicacion')->with('info','Publicación eliminada con éxito');
    }
}

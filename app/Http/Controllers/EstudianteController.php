<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              $estudiante = Estudiante::paginate(5);
              return view('estudiante.index')->with('estudiante',$estudiante);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();

        $estudiante->id_estudiante = $request->get('id');
        $estudiante->nombre_estu = $request->get('name');
        $estudiante->apellidos_estu = $request->get('surname');
        $estudiante->edad_estu = $request->get('age');
        $estudiante->genero_estu = $request->get('gender');

        $estudiante->save();
        return redirect('/estudiante');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('docente.editar')->with('docente',$estudiante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante = new Estudiante();

        $estudiante->id_estudiante = $request->get('id');
        $estudiante->nombre_estu = $request->get('name');
        $estudiante->apellido_estu = $request->get('surname');
        $estudiante->edad_estu = $request->get('age');
        $estudiante->genero_estu = $request->get('gender');

        $estudiante->save();
        return redirect('/estudiante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estudiante::id($id)->Delete();
        return redirect()->route('estudiante.index');
    }
}

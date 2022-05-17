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
              $estudiante = Estudiante::paginate();
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
       $this->validate($request,[
        'id_estudiante' => 'required|numeric|not_in:0|min:5',
            'nombre_estu'=> 'required|alpha|min:4',
            'apellidos_estu'=> 'required|alpha|min:4',
            'edad_estu'=> 'required|numeric|not_in:0|min:1',
            'genero_estu'=> 'required|alpha',
       ]);
       $input = $request->all();

       $estudiante = Estudiante::create($input);
       $estudiante->save();
       return redirect()->route('estudiante.index');

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
        return view('estudiante.editar')->with('estudiante',$estudiante);
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
        $this->validate($request,[
            'id_estudiante' => 'required|numeric|not_in:0|min:5',
            'nombre_estu'=> 'required|string|min:4|',
            'apellidos_estu'=> 'required|min:4|string',
            'edad_estu'=> 'required|numeric|not_in:0|min:1',
            'genero_estu'=> 'required|alpha',



           ]);

           $input = $request->all();
          $estudiante = Estudiante::find($id);
          $estudiante->update($input);
          return redirect()->route('estudiante.index');

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

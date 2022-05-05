<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;



class DocenteController extends Controller
{
    function __construct(){
        $this->middleware('permission:ver-docente | crear-docente | editar-docente | borrar-docente',['only'=> ['index']]);
        $this->middleware('permission:ver-estudiante | crear-estudiante | editar-docente | borrar-docente',['only'=>['index']]);
        $this->middleware('permission:ver-docente',['only'=> ['show','store']]);
        $this->middleware('permission:ver-estudiante',['only'=>['show','store']]);



    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $docente = Docente::paginate(5);
        return view('docente.index')->with('docente',$docente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docente = new Docente();

        $docente->id_docente = $request->get('id');
        $docente->nombre_doc = $request->get('name');
        $docente->apellidos_doc = $request->get('surname');
        $docente->edad_doc = $request->get('age');
        $docente->genero_doc = $request->get('gender');

        $docente->save();
        return redirect('/docente');
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
        $docente = Docente::find($id);
        return view('docente.editar')->with('docente',$docente);
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

        $docente = Docente::find($id);

        $docente->id_docente = $request->get('id');
        $docente->nombre_doc = $request->get('name');
        $docente->apellidos_doc = $request->get('surname');
        $docente->edad_doc = $request->get('age');
        $docente->genero_doc = $request->get('gender');
        $docente->rol = $request->get('rol');

        $docente->save();
        return redirect('/docente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $id)
    {
        Docente::find($id)->delete();
        return redirect()->route('docente.index');

    }
}

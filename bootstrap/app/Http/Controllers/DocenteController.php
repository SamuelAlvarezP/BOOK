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
       $docente = Docente::all();
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
        /*$docente = new Docente();

        $docente->id_docente = $request->get('id_docente');
        $docente->nombre_doc = $request->get('nombre_doc');
        $docente->apellidos_doc = $request->get('apellidos_doc');
        $docente->edad_doc = $request->get('edad_doc');
        $docente->genero_doc = $request->get('genero_doc');
*/


        //$docente->save();
        //return redirect('/docente');

        $this->validate($request,[
            'id_docente' => 'required|numeric|not_in:0|min:5|filled',
            'nombre_doc'=> 'required|string|min:4|filled|',
            'apellidos_doc'=> 'required|string|min:4|filled',
            'edad_doc'=> 'required|numeric|not_in:0|min:1|filled',
            'genero_doc'=> 'required|alpha',


        ]);

        $input = $request->all();

        $docente = Docente::create($input);
        $docente->save();
        return redirect()->route('docente.index');
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

        /*$docente = Docente::find($id);

        $docente->id_docente = $request->get('id_docente');
        $docente->nombre_doc = $request->get('nombre_doc');
        $docente->apellidos_doc = $request->get('apellidos_doc');
        $docente->edad_doc = $request->get('edad_doc');
        $docente->genero_doc = $request->get('genero_doc');
        $docente->rol = $request->get('rol');

        $docente->save();
        return redirect('/docente');*/

        $this->validate($request,[
            'id_docente' => 'required|numeric|not_in:0|min:5',
            'nombre_doc'=> 'required|alpha|min:4',
            'apellidos_doc'=> 'required|alpha|min:4',
            'edad_doc'=> 'required|numeric|not_in:0|min:1',
            'genero_doc'=> 'required|alpha',



           ]);

           $input = $request->all();
          $docente = Docente::find($id);
          $docente->update($input);
          return redirect()->route('docente.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Docente::find($id)->delete();
        return redirect()->route('docente.index');
    }
}

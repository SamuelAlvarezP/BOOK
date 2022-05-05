
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Docentes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                                <a href="{{ route('docente.create')}}" class="btn btn-primary" type="button">Nuevo</a>
                                 <table class="table table-striped mt-2">
                                  <thead style="background-color:black">
                                    <th style="color:bisque">ID</th>
                                    <th style="color:bisque">ID DOCENTE</th>
                                    <th style="color:bisque">Nombre Docente</th>
                                    <th style="color:bisque">Apellido Docente</th>
                                    <th style="color:bisque">Edad Docente</th>
                                    <th style="color:bisque">Genero Docente</th>
                                    <th style="color:bisque">Rol</th>
                                    <th style="color:bisque">Acciones</th>
                                   </thead>
                                    <tbody>
                                        @foreach($docente as $docente)
                                           <tr>
                                               <td>{{$docente->id}}</td>
                                                <td>{{$docente->id_docente}}</td>
                                               <td>{{$docente->nombre_doc}}</td>
                                               <td>{{$docente->apellidos_doc}}</td>
                                               <td>{{$docente->edad_doc}}</td>
                                               <td>{{$docente->genero_doc}}</td>
                                               <td>{{"docente"}}</td>
                                               <td>
                                                   <a href="{{ route ('docente.edit', $docente->id)}}" class="btn btn-info">Editar</a>

                                                    {!! Form::open(['method'=>'DELETE','route'=>['docente.destroy',$docente->id],'style'=>'display:inline']) !!}

                                                        {!!  Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                               </td>

                                           </tr>
                                        @endforeach
                                    </tbody>
                                 </table>

                                 </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


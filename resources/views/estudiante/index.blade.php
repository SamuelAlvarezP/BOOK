
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Estudiantes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                                <a href="{{ route('estudiante.create')}}" class="btn btn-primary" type="button">Nuevo</a>
                                 <table class="table table-striped mt-2">
                                  <thead style="background-color:black">
                                    <th style="color:bisque">ID</th>
                                    <th style="color:bisque">ID ESTUDIANTE</th>
                                    <th style="color:bisque">Nombre Estudiante</th>
                                    <th style="color:bisque">Apellido Estudiante</th>
                                    <th style="color:bisque">Edad Estudiante</th>
                                    <th style="color:bisque">Genero Estudiante</th>
                                    <th style="color:bisque">Rol</th>
                                    <th style="color:bisque">Acciones</th>
                                   </thead>
                                    <tbody>
                                        @foreach($estudiante as $estudiante)
                                           <tr>
                                               <td>{{$estudiante->id}}</td>
                                                <td>{{$estudiante->id_estudiante}}</td>
                                               <td>{{$estudiante->nombre_estu}}</td>
                                               <td>{{$estudiante->apellidos_estu}}</td>
                                               <td>{{$estudiante->edad_estu}}</td>
                                               <td>{{$estudiante->genero_estu}}</td>
                                               <td>{{"estudiante"}}</td>
                                               <td>
                                                   <a href="{{ route ('estudiante.edit', $estudiante->id)}}" class="btn btn-info">Editar</a>

                                                    {!! Form::open(['method'=>'DELETE','route'=>['estudiante.destroy',$estudiante->id],'style'=>'display:inline']) !!}

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


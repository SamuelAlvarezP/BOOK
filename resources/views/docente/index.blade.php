
@extends('layouts.app')
@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

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
                            @section('css')
                            <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
                            @endsection


                                <a href="{{ route('docente.create')}}" class="btn btn-primary" type="button">Nuevo</a>
                                 <table id="Docentes" class="table table-striped mt-2" style="width: :100%">
                                  <thead style="background-color:black">
                                    <th scope="col" style="color:bisque">ID</th>
                                    <th scope="col" style="color:bisque">ID DOCENTE</th>
                                    <th scope="col" style="color:bisque">Nombre Docente</th>
                                    <th scope="col" style="color:bisque">Apellido Docente</th>
                                    <th scope="col" style="color:bisque">Edad Docente</th>
                                    <th scope="col" style="color:bisque">Genero Docente</th>
                                    <th scope="col" style="color:bisque">Rol</th>
                                    <th scope="col" style="color:bisque">Acciones</th>
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
                                 @section('js')

                                 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                                 <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
                                 <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
                                 <script>
                                     $(document).ready(function() {
                                     $('#Docentes').DataTable();
                                 });
                                 </script>
                                 @endsection

                                 </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection




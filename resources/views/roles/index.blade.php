@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-rol')
                            <a href="{{ route('roles.create')}}" class="btn btn-warning">Nuevo</a>

                          @endcan
                            <table class="table table-striped mt-2">
                                <thead style="background-color:black">

                                  <th style="color:bisque">Rol</th>
                                  <th style="color:bisque">Acciones</th>
                                 </thead>
                                  <tbody>
                                       <!--RECORRE TODOS LOS REGISTROS DE ROLES-->
                                      @foreach($roles as $role)
                                         <tr>

                                             <td>{{$role->name}}</td>

                                             <td>
                                            <!--EDITAR ROL -->
                                             @can('editar-rol')
                                                 <a href="{{ route('roles.edit',$role->id)}}" class="btn btn-warning">Editar</a>
                                             @endcan
                                              <!--ELIMINAR ROL -->
                                              @can('borrar-rol')
                                              {!! Form::open(['method'=>'DELETE','route'=>['roles.destroy',$role->id],'style'=>'display:inline']) !!}
                                              {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                                              {!! Form::close() !!}
                                              @endcan
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
    </section>
@endsection


@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                                <a href="{{ route('usuarios.create')}}" class="btn btn-primary" type="button">Nuevo</a>
                                 <table class="table table-striped mt-2">
                                  <thead style="background-color:black">
                                    <th style="display: none;">ID</th>
                                    <th style="color:bisque">Nombre</th>
                                    <th style="color:bisque">Email</th>
                                    <th style="color:bisque">Rol</th>
                                    <th style="color:bisque">Acciones</th>
                                   </thead>
                                    <tbody>
                                        @foreach($usuario as $usuario)
                                           <tr>
                                               <td style="display:none">{{$usuario->id}}</td>
                                               <td>{{$usuario->name}}</td>
                                               <td>{{$usuario->email}}</td>
                                               <td>@if (!empty($usuario->getRoleNames()))
                                                @foreach($usuario->getRoleNames() as $rolName)
                                                 <h5><span class="">{{$rolName}}</span></h5>
                                                 @endforeach
                                                @endif
                                               </td>
                                               <td>
                                                   <a href="{{ route('usuarios.edit', $usuario->id)}}" class="btn btn-info">Editar</a>

                                                    {!! Form::open(['method'=>'DELETE','route'=>['usuarios.destroy',$usuario->id],'style'=>'display:inline']) !!}

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


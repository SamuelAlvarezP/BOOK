@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar Estudiantes</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-11">
                <div class="card">
                    <div class="card-body">

                       @if ($errors->any())
                       <div class="alert alter-dark aler-dissmis fade show">
                           <strong>Revise los campos</strong>
                           @foreach ($errors->all() as $error)
                           <span badga badge-danger>{{$error}}</span>
                           @endforeach
                           <button type="button" class="close" data-dissmis="alert" aria-label="close">
                               <span aria-hidden="true">$times;</span>
                           </button>
                           @endif

                           {!! Form::model($estudiante,['method'=>'PATCH','route'=>['estudiante.update',$estudiante->id]])!!}
                           <div class="row">
                               <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="form-group">
                                       <label for="id_estudiante">ID del Estudiante</label>
                                       {!! Form::text('id_estudiante',$estudiante->id_estudiante,array('class'=>'form-control')) !!}
                                   </div>
                                   <div class="row">
                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                           <div class="form-group">
                                               <label for="nombre_estu">Nombre del Estudiante</label>
                                               {!! Form::text('nombre_estu',$estudiante->nombre_estu,array('class'=>'form-control')) !!}
                                           </div>
                                           <div class="row">
                                               <div class="col-xs-12 col-sm-12 col-md-12">
                                                   <div class="form-group">
                                                       <label for="apellidos_estu">Apellido del Estudiante</label>
                                                       {!! Form::text('apellidos_estu',$estudiante->apellidos_estu,array('class'=>'form-control')) !!}
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                                           <div class="form-group">
                                                               <label for="edad_estu">Edad del Estudiante</label>
                                                               {!! Form::text('edad_estu',$estudiante->edad_estu,array('class'=>'form-control')) !!}
                                                           </div>
                                                           <div class="row">
                                                               <div class="col-xs-12 col-sm-12 col-md-12">
                                                                   <div class="form-group">
                                                                       <label for="genero_estu">Genero del Estudiante</label>
                                                                       {!! Form::text('genero_estu',$estudiante->genero_estu,array('class'=>'form-control','readonly'=>'readonly')) !!}
                                                                   </div>
                                                                   <br>
                                                                   <div class="col-xs-12 col-sm-12 col-md-12">
                                                                       <button type="submit" class="btn btn-success">Guardar</button>
                                                                   </div>


                       </div>


                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection


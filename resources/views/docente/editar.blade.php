@extends('layouts.app')

@section('content')
 <section class="section">
     <div class="section-header">
         <h3 class="page__heading">Editar Docentes</h3>
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

                            {!! Form::model($docente,['method'=>'PATCH','route'=>['docente.update',$docente->id]])!!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="id_docente">ID del Docente</label>
                                        {!! Form::text('id_docente',$docente->id_docente,array('class'=>'form-control')) !!}
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="nombre_doc">Nombre del Docente</label>
                                                {!! Form::text('nombre_doc',$docente->nombre_doc,array('class'=>'form-control')) !!}
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="apellidos_doc">Apellido del Docente</label>
                                                        {!! Form::text('apellidos_doc',$docente->apellidos_doc,array('class'=>'form-control')) !!}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <label for="edad_doc">Edad del Docente</label>
                                                                {!! Form::text('edad_doc',$docente->edad_doc,array('class'=>'form-control')) !!}
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="genero_doc">Genero del Docente</label>
                                                                        {!! Form::text('genero_doc',$docente->genero_doc,array('class'=>'form-control')) !!}
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


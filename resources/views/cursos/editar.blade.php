@extends('adminlte::page')
@section('title', 'Editar curso')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Curso</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show">
                                <strong>Revise los campos</strong>
                                @foreach ($errors->all() as $error )
                                <span badge badge-danger>{{$error}}</span>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            {!! Form::model($cursos,['route'=>['cursos.update',$cursos], 'method' => 'put']) !!}

                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nombre clase</label>
                                        {!! Form::text('nombre_clase',null,array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Tipo clase</label>
                                        {!! Form::select('tipo_clase', ['','Lectura','Escritura'], null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>

                          </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
+
    </section>
@endsection


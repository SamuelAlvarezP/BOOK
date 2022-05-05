@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Docente</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>Revise los campos</strong>
                                @foreach ($errors->all() as $error )
                                <span badge badge-danger>{{$error}}</span>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            {!! Form::open(array('route'=>'docente.store','method'=>'POST')) !!}

                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="id">ID docente</label>
                                        {!! Form::text('id',null,array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="surname">Apellidos</label>
                                        {!! Form::text('surname',null,array('class'=>'form-control')) !!}
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="age">edad</label>
                                        {!! Form::text('age',null,array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="gender">Genero</label>
                                        <br>
                                        <select name="gender" id="gender">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Rol</label>
                                        {!! Form::text('rol','Docente', array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                              </div>
                               <br>
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
    </section>
@endsection


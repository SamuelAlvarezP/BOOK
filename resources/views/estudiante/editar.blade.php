@extends('layouts.app')

@section('content')
<h2>EDITAR REGISTROS</h2>
<form action="{{route('estudiante.edit',['estudiante'=>$estudiante->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">ID del Estudiante</label>
        <input type="text" id="id" name="id" class="form-control" value="{{$docente->id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre del Estudiante</label>
        <input type="text" id="name" class="form-control" name="name" value="{{$docente->name}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido del Estudiante</label>
        <input type="text" id="surname" class="form-control" name="surname" value="{{$docente->surname}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad del Estudiante</label>
        <input type="text" id="age" class="form-control" name="age" value="{{$docente->age}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Genero del Estudiante</label>
        <input type="text" id="gender" name="gender" class="form-control" value="{{$docente->gender}}">
    </div>
    <a href="/docente" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


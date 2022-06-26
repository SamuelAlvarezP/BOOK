@extends('adminlte::page');
@section('title','Cursos')
@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content_header')
    <h1>Cursos</h1>
@endsection
@section('content')
@if (session('info'))
    <div class="alert alert-success">{{session('info')}}</div>
@endif

<a href="{{route('cursos.create')}}" class="btn btn-primary">Crear</a>

<p>   </p>
<table id="usuario" class="table table-dark table-striped mt-4" style="width:100%">
<thead class="bg-primary text-white">
        <tr>
            <th scope="col">Id curso</th>
            <th scope="col">Nombre del curso </th>
            <th scope="col">Tipo de curso</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($cursos as $curso)
            <tr>
                <td>{{$curso->id}}</td>
                <td>{{$curso->nombre_curso}}</td>
                <td>{{$curso->tipo_curso}}</td>

                <td>
                <form action="{{ route ('cursos.destroy',$curso)}}" method="POST">
                    <a href="{{route('cursos.edit',$curso)}}" class="btn btn-info">Editar</a>
                     @csrf
                     @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="
                    return confirm('¿Quieres eliminar este registro?')">Eliminar</button>
                    </form>
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
    $('#usuario').DataTable();
} );
</script>

@endsection

@endsection

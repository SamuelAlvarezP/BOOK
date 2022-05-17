@extends('layouts.plantillabase');

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@livewire('navigation-menu')
@section('contenido')

<a href="estudiante/create" class="btn btn-primary">Crear</a>

<p>   </p>
<table id="estudiante" class="table table-dark table-striped mt-4" style="width:100%">
<thead class="bg-primary text-white">
        <tr>
            <th scope="col">id Estudiante</th>
            <th scope="col">nombre Estudiante</th>
            <th scope="col">apellidos Estudiante</th>
            <th scope="col">edad Estudiante</th>
            <th scope="col">genero Estudiante</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($estudiante as $estudiante)
            <tr>
                <td>{{$estudiante->id_estudiante}}</td>
                <td>{{$estudiante->nombre_estu}}</td>
                <td>{{$estudiante->apellidos_estu}}</td>
                <td>{{$estudiante->edad_estu}}</td>
                <td>{{$estudiante->genero_estu}}</td>
                <td>
                <form action="{{ route ('estudiante.destroy',$estudiante->id)}}" method="POST">
                    <a href="/estudiante/{{$estudiante->id}}/edit" class="btn btn-info">Editar</a>
                     @csrf
                     @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
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
    $('#estudiante').DataTable();
} );
</script>

@endsection

@endsection

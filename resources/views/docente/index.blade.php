@extends('layouts.plantillabase');

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@livewire('navigation-menu')
@section('contenido')

<a href="docente/create" class="btn btn-primary">Crear</a>

<p>   </p>
<table id="docentes" class="table table-dark table-striped mt-4" style="width:100%">
<thead class="bg-primary text-white">
        <tr>
            <th scope="col">id docente</th>
            <th scope="col">nombre docente</th>
            <th scope="col">apellidos docente</th>
            <th scope="col">edad docente</th>
            <th scope="col">genero docente</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($docente as $docente)
            <tr>
                <td>{{$docente->id_docente}}</td>
                <td>{{$docente->nombre_doc}}</td>
                <td>{{$docente->apellidos_doc}}</td>
                <td>{{$docente->edad_doc}}</td>
                <td>{{$docente->genero_doc}}</td>
                <td>
                <form action="{{ route ('docente.destroy',$docente->id)}}" method="POST">
                    <a href="/docente/{{$docente->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#docentes').DataTable();
} );
</script>

@endsection

@endsection

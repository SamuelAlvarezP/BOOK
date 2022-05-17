@extends('layouts.plantillabase');

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@livewire('navigation-menu')
@section('contenido')

<a href="usuarios/create" class="btn btn-primary">Crear</a>

<p>   </p>
<table id="usuario" class="table table-dark table-striped mt-4" style="width:100%">
<thead class="bg-primary text-white">
        <tr>
            <th scope="col">id usuario</th>
            <th scope="col">nombre</th>
            <th scope="col">email</th>

            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($usuario as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                <form action="{{ route ('usuarios.destroy',$usuario->id)}}" method="POST">
                    <a href="/usuario/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#usuario').DataTable();
} );
</script>

@endsection

@endsection

<x-app-layout>
    @section('content')
    <br>
    <br>
    <br>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">CURSOS DE ESCRITURA</h4>
                            @if($publicacion->count() > 0)
                            <div class="table-responsive">
                                <table class="table" id="cursos">
                                    <thead>
                                        <tr>
                                            <th>Id publicación</th>
                                            <th>Título de la publicación</th>
                                            <th>Contenido de la publicación</th>
                                            <th colspan="2">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($publicacion as $publicacion)
                                          <tr>
                                            <td>{{$publicacion->id}}</td>
                                            <td>{{$publicacion->titulo}}</td>
                                            <td>{{$publicacion->contenido}}</td>
                                            <td width="20px"><a href="#" class="btn btn-primary btn-sm">Editar</a></td>
                                            <form action="{{route('publicacion.destroy')}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <td width="20px"><button type="submit" class="btn btn-danger btn-sm">Eliminar</button></td>

                                            </form>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <p>No hay publicaciones disponibles</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>

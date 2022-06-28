<x-app-layout>
@section('content')
<br>
<br>
<br>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
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
                                @if($cursos->count() > 0)
                                <div class="table-responsive">
                                    <table class="table" id="cursos">
                                        <thead>
                                            <tr>
                                                <th>Id curso</th>
                                                <th>Nombre curso</th>
                                                <th>Tipo curso</th>
                                                <th colspan="2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cursos as $curso)
                                              <tr>
                                                <td>{{$curso->id}}</td>
                                                <td>{{$curso->nombre_curso}}</td>
                                                <td>{{$curso->tipo_curso}}</td>
                                                <td width="20px"><a href="{{route('crear.publicacion',$curso)}}" class="btn btn-primary btn-sm">Realizar publicación</a></td>
                                                <td width="20px"><a href="{{route('mostrar.publicacion',$curso)}}" class="btn btn-info btn-sm">Ver publicaciones</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                        <p>No hay cursos de lectura disponibles, contactate con el admin</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    @endsection
</x-app-layout>

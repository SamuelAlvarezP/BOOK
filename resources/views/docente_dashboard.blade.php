<x-app-layout>
    <!-- ***** INICIO ***** -->
    @section('content')

    <!-- MODULOS -->
    <section class="section" id="modulos">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">

                    </div>
                </div>

                 <!--CURSO LECTURA -->
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/lectura.png')}}" width="200px" height="200px" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Curso lectura</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                <a href="{{route('docente.cursos')}}" class="text-button">Ingresar</a>
                            </div>


                        <!--CURSO ESCRITURA -->
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/escritura.png')}}" width="200px" height="200px"  alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Curso escritura</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href="{{route('docente.cursos.escritura')}}" class="text-button">Ingresar</a>
                            </div>


                            <!--  MULTIMEDIA  -->
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/multimedia.png')}}" width="200px" height="200px" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Multimedia</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot. </p>
                                <a href="#" class="text-button">Ingresar</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- PROGRESO  -->
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/progreso.webp')}}" width="250px" height="200px">
                            </div>
                            <div class="right-content">
                                <h4>Progreso de los estudiantes</h4>
                                <p>Con BOOK puedes ver el progreso parcial y total de los estudiantes de tu grupo de una manera sencilla</p>
                                <a href="#" class="text-button">Ingresar</a>
                            </div>


                    <!--QUIZ -->
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{asset('images/quiz.jpg')}}" width="250px" height="200px" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Quiz</h4>
                                <p>Puedes ver y modificar los quiz hechos para los estudiantes.</p>
                                <a href="#" class="text-button">Ingresar</a>
                            </div>
                        </li>
                        </ul>
                </div>
            </div>
        </div>
    </section>
    @endsection
</x-app-layout>

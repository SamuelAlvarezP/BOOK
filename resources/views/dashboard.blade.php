<!DOCTYPE html>
<html lang="en">
   <head>
      <style>
        .dropdown a{
            color: black;
        }
        .botones{

            padding-left: 20%;
         }
         .boton{
            padding-left: 32%;
         }
         .imagen{
            border-radius: 50%;
            width: 28%;
            height: 48%;
            margin-top: -3%;
         }
         .aprendizaje{
            background-image: asset("images/fondo2.png");
         }
      </style>

      <!-- METAS BÁSICOS -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <!-- METAS PARA EL RESPONSIVE-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <!-- TÍTULO -->
      <title>ESTUDIANTE</title>

      <!-- METAS GENERALES-->
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- BOOTSTRAP CSS-->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- STYLE CSS -->
      <link rel="stylesheet" href="{{asset('css/student.css')}}">
      <!-- RESPONSIVE-->
      <link rel="stylesheet" href="{{asset('css/responsive2.css')}}">
      <!-- FEVICON -->
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
      <!-- SCROLLBAR CUSTOMCSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- TWEAKS FOR OLDER IES-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="shortcut icon" href="{{asset('images/logo_blanco.png')}}" />
      <link rel="icon" type="image/x-icon" href="{{asset('images/logo_blanco.png')}}" />
   </head>

   <!--BODY -->
   <body class="main-layout">
    @if(session('info'))

        <div class="alert alert-success">{{session('info')}}</div>

    @endif
      <!-- LOADER -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- END LOADER -->
      <!-- HEADER -->
      <header>
         <!-- HEADER INNER -->
         <div class="head">
            <div  class="container">
               <div class="row ">
                  <div  class="col-md-6">
                     <ul class="email_call">
                        <li class="dropdown"><a class="dropdown-toggle text-white" data-toggle="dropdown" href="#">{{auth()->user()->name}}
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu ">
                              <li><a href="{{route('profile.show')}}" class="dropdown">Configuraciones</a></li>
                              <form action="{{route('logout')}}" method="post">
                                @csrf
                              <li><button type="submit">Cerrar sesión</button></li>
                            </form>
                            </ul>
                          </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

         <!-- LOGO-->
         <div class="header-top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- FIN BARRA DE MENÚ-->

            <!-- CARRUSEL -->
            <section class="slider_section">
               <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
                  <ol class="carousel-indicators">
                  </ol>

                  <!-- TEST DE APRENDIZAJE -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row ">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <span>TEST DE APRENDIZAJE</span>
                                       <a class="buttons-login" href="{{route('show.test')}}">Empieza ahora</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>

      <!-- CURSOS -->
      <div id="cursos" class="back_box">
         <div class="container-fluid">
            <div class="row">

                <!-- CURSOS ESCRITURA-->
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_rile">
                  <div class="three_box">
                     <img src="{{asset('images/escritura.png')}}" class="imagen" alt="">
                     <h3>CURSO DE ESCRITURA</h3>
                     @if ($test->user_id == auth()->user()->id)
                     <a href="../BOOK/login.html" class="btn btn-danger">¡Empieza ahora!</a>
                    @else
                    <a href="../BOOK/login.html" class="btn btn-danger disabled">¡Empieza ahora!</a>

                     @endif
                  </div>
               </div>

                <!-- CURSOS LECTURA -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_rile">
                    <div class="three_box">
                       <img src="{{asset('images/lectura.png')}}" class="imagen" alt="">
                       <h3>CURSO DE LECTURA</h3>
                       @if ($test->user_id == auth()->user()->id)
                       <a href="../BOOK/login.html" class="btn btn-danger">¡Empieza ahora!</a>
                      @else
                      <a href="../BOOK/login.html" class="btn btn-danger disabled">¡Empieza ahora!</a>

                       @endif
                    </div>
                 </div>

                <!-- MULTIMEDIA -->
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_ri">
                  <div class="three_box">
                     <img src="{{asset('images/multimedia.png')}}" class="imagen" alt="">
                     <h3>MULTIMEDIA</h3>
                     @if ($test->user_id == auth()->user()->id)
                     <a href="../BOOK/login.html" class="btn btn-danger">¡Empieza ahora!</a>
                    @else
                    <a href="../BOOK/login.html" class="btn btn-danger disabled">¡Empieza ahora!</a>

                     @endif
                    </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <br>
       <div id="modulos" class="back_box">
         <div class="container-fluid">
            <div class="row">
            </div>
         </div>
      </div>

                  <!-- QUIZ-->
                <div id="modulos" class="back_box">
                  <div class="container-fluid">
                     <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_rile">
                  <div class="three_box">
                     <img src="{{asset('images/quiz.jpg')}}" class="imagen" alt="">
                     <h3>QUIZ</h3>
                     <br>
                     @if ($test->user_id == auth()->user()->id)
                     <a href="../BOOK/login.html" class="btn btn-danger">¡Empieza ahora!</a>
                    @else
                    <a href="../BOOK/login.html" class="btn btn-danger disabled">¡Empieza ahora!</a>

                     @endif
                    </div>
               </div>

                <!-- JUEGOS -->
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padding_l">
                  <div class="three_box">
                     <img src="{{asset('images/juegos.png')}}" class="imagen" alt="">
                     <h3>JUEGOS</h3>
                     <br>
                     @if ($test->user_id == auth()->user()->id)
                     <a href="../BOOK/login.html" class="btn btn-danger">¡Empieza ahora!</a>
                    @else
                    <a href="../BOOK/login.html" class="btn btn-danger disabled">¡Empieza ahora!</a>

                     @endif
                    </div>
               </div>

               <!-- LOGROS -->
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padding_l">
                  <div class="three_box">
                     <img src="{{asset('images/logros.png')}}" class="imagen" alt="">
                     <h3>LOGROS</h3>
                     <br>
                     @if ($test->user_id == auth()->user()->id)
                     <a href="../BOOK/login.html" class="btn btn-danger">¡Empieza ahora!</a>
                    @else
                    <a href="../BOOK/login.html" class="btn btn-danger disabled">¡Empieza ahora!</a>

                     @endif
                    </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!-- FIN MÓDULOS -->

      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
             var map = new google.maps.Map(document.getElementById('map'), {
                 zoom: 11,
                 center: {
                     lat: 40.645037,
                     lng: -73.880224
                 },
             });

             var image = 'images/maps-and-flags.png';
             var beachMarker = new google.maps.Marker({
                 position: {
                     lat: 40.645037,
                     lng: -73.880224
                 },
                 map: map,
                 icon: image
             });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>

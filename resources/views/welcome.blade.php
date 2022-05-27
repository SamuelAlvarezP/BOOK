<!DOCTYPE html>
<html lang="en">
   <head>
      <style>
         .botones{

            padding-left: 20%;
         }
         .boton{
            padding-left: 32%;
         }

      </style>
      <!-- METAS BÁSICOS -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- METAS PARA EL RESPONSIVE-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- TÍTULO -->
      <title>BOOK</title>
      <!-- METAS GENERALES-->
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- BOOTSTRAP CSS-->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- STYLE CSS -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- RESPONSIVE-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
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
      <link rel="shortcut icon" href="images/logo_blanco.png" />
      <link rel="icon" type="image/x-icon" href="../BOOK1/BOOK/images/logo_blanco.png" />

   </head>
   <!--BODY -->
   <body class="main-layout">
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
                     </ul>
                  </div>

                   <!-- LINK REDES SOCIALES BOOK -->
                   <div class="col-xl-10 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                       <div class="limit-box">
                          <nav class="main-menu py-0">
                             <ul class="menu-area-main">
                                <li class="active"> <a href="index.html">INICIO</a> </li>
                                <li> <a href="#modulos">MÓDULOS</a> </li>
                                <li> <a href="#acompañamiento">ACOMPAÑAMIENTO</a> </li>
                                <li> <a href="#noticias">NOTICIAS</a> </li>
                                <li> <a href="#actualizaciones">ACTUALIZACIONES</a> </li>
                                <li> <a href="#contactanos">CONTÁCTANOS</a> </li>

                             </ul>
                          </nav>
                       </div>
                    </div>
                 </div>
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
                      <!-- BARRA DE MENÚ -->

                  </div>
               </div>
            </div>
            <!-- FIN BARRA DE MENÚ-->
            <!-- END HEADER -->

            <!-- CARRUSEL -->
            <section class="slider_section">
               <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- BIENVENIDOS -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row ">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <span>BIENVENIDOS A BOOK</span>

                                       <p> En BOOK estamos generando métodos para facilitar el aprendizaje de los estudiantes, mejorando su rendimiento escolar para que tengan una mejor experiencia educativa en sus próximos años, nuestro contenido es accesible para todas las edades y se adaptará a su nivel de aprendizaje, podrán progresar en la formación de palabras, ampliar su vocabulario e iniciarse en su capacidad de aprende a leer y escribir. ¡Comienza ahora!</p>
                                       <div class=""><a href="{{route('login')}}">Inicia sesión</a></div>
                                       <a href="{{route('register')}}" class="btn btn-primary">Registrarse</a>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- APRENDE FÁCIL Y RÁPIDO -->
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <span>CONTRIBUIMOS CON EL FUTURO</span>
                                       <p> En BOOK estamos contribuyendo con el futuro de los estudiantes, proporcionándole herramientas para que  obtengan un excelente desempeño en los retos que se le presenten y así se sientan seguros de afrontarlo.</p>
                                       <div class=""><a href="{{route('login')}}">Inicia sesión</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- EN BOOK TE OFRECEMOS -->
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <span>EN BOOK TE OFRECEMOS</span>
                                       <p>En BOOK te ofrecemos múltiples opciones para los estudiantes: memorización visual y auditiva, mejora de la comprensión, discriminación de vocales y consonantes, escribir el trazo de las letras del alfabeto y ampliar el vocabulario con animaciones de objetos, animales ,etc.  </p>
                                       <div class=""><a href="{{route('login')}}">Inicia sesión</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!--APRENDIZAJE FÁCIL Y RÁPIDO -->
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <span>APRENDIZAJE FÁCIL Y RÁPIDO</span>
                                       <p> Aprende a leer y escribir de una forma didáctica y sencilla, si deseas puedes reforzar lo que ya sabes para tener mejor desempeño en tus estudios, Incorporamos actividades de reconocimiento auditivo para esta etapa de su aprendizaje. ¡Inicia ahora!</p>
                                       <div class=""><a href="{{route('login')}}">Inicia sesión</a></div>

                                 </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </section>
         </div>
      </header>

      <!-- MÓDULOS -->
      <div id="modulos" class="back_box">
         <div class="container-fluid">
            <div class="row">

                <!-- ESCRITURA-->
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_rile">
                  <div class="three_box">
                     <span class="yellow" >01</span>
                     <h3>ESCRITURA</h3>
                     <p> En nuestro aplicativo web puedes aprender a escribir con nuestros cursos de escritura básica de una forma sencilla, didáctica y adaptable según tu forma de aprender. </p>
                     <br>
                     <a href="{{route('login')}}"><Button type="button" class="btn btn-warning">Inicia sesión</Button></a>
                  </div>
               </div>

                <!-- LECTURA -->
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padding_l">
                  <div class="three_box">
                           <span class="yellow" >02</span>
                     <h3>LECTURA</h3>
                     <p>En nuestro aplicativo web puedes aprender a leer con nuestros cursos de lectura básica de una forma sencilla y de la manera que más te gusta aprender.</p>
                     <br>
                     <a href="{{route('login')}}"><Button type="button" class="btn btn-warning">Inicia sesión</Button></a>
                  </div>
               </div>

                <!-- MULTIMEDIA -->
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_ri">
                  <div class="three_box">
                     <span class="yellow" >03</span>
                     <h3>MULTIMEDIA</h3>
                     <p>En nuestro aplicativo web puedes repasar y aprender con el contenido audiovisual que esta actualizado para aprender cosas nuevas. </p>
                     <br>
                     <a href="{{route('login')}}"><Button type="button" class="btn btn-warning">Inicia sesión</Button></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FIN MÓDULOS -->

      <!-- ACOMPAÑAMIENTO  -->
      <div id="acompañamiento" class="wellcome">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>ACOMPAÑAMIENTO SEGURO</h2>
                     <p>Con BOOK tienes un acompañamiento seguro de la institución, docentes de lengua castellana y acudientes.</p>
                  </div>
               </div>
            </div>
             <!-- IMÁGENES  -->
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="wellcome-box">
                     <figure><img src="{{asset('images/est.jpg')}}" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="wellcome-box">
                     <figure><img src="{{asset('images/estu (2).jpg')}}" alt="#" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FIN ACOMPAÑAMIENTO -->

      <!-- NOTICIAS-->
      <div id="noticias" class="ourwork">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>NOTICIAS</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="main_slider1" class="carousel slide banner-main3" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="{{asset('images/tienda.jfif')}}" alt="#"/></figure>
                                          <p>Resolución Rectoral- N07 - Apertura Proceso tienda escolar Sede 1 - 2022 </p>
                                       </div>
                                    </div>
                                    <div class="col-md-5">
                                       <div class="our">
                                          <figure><img src="images/tienda_2.jfif" alt="#"/></figure>
                                          <p>
                                             Resolución Rectoral - N08 - Apertura Proceso tienda escolar Sede 2 - 2022 </p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="{{asset('images/papeleria.jpg')}}" alt="#"/></figure>
                                          <p>Resolución Rectoral - N09 - Apertura Proceso papelería sede 1 - 2022 </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="{{asset('images/juego_6.jpeg')}}" alt="#"/></figure>
                                          <p>Tenemos un juego educativo disponible  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-5">
                                       <div class="our">
                                          <figure><img src="{{asset('images/juego_9.png')}}" alt="#"/></figure>
                                          <p>Nuevo juego educativo: organiza las palabras</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#main_slider1" role="button" data-slide="prev"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     <a class="carousel-control-next" href="#main_slider1" role="button" data-slide="next"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FIN NOTICIAS -->

      <!-- IMAGEN -->
      <div class="Better">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="Better_clean">
                     <figure><img src="{{asset('images/juego_3.jpeg')}}" width="900px" height="800px"/></figure>
                     <br>
                     <center><a href="{{route('login')}}"><Button type="button" class="btn btn-primary">Inicia sesión</Button></a>
                     </center>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <!-- INICIO ACTUALIZACIONES -->
      <div id="actualizaciones" class="review">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>ACTUALIZACIONES</h2>
                  </div>
               </div>
            </div>
             <!-- JUEGO 1: ¿EN DONDE ESTÁN LAS LETRAS?-->
            <div class="row">
               <div class="col-md-12">
                  <div id="main_slider" class="carousel slide banner-main2" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption">
                                 <img src="{{asset('images/juego_1.jpeg')}}" alt="#"/>
                                 <span>¿EN DONDE ESTÁN LAS LETRAS?</span>
                                 <p>En este juego educativo el estudiante debe encontrar la letra coincidente entre las dos fichas lo más rápido posible. Este juego permite afianzar el reconocimiento visual de las vocales y las consonantes.</p>
                                 <center><a href="{{route('login')}}"><Button type="button" class="btn btn-outline-dark">Inicia sesión</Button></a></center>
                              </div>
                           </div>
                        </div>

                         <!--JUEGO 2: ESCRIBE LA LETRA-->
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <i><img src="{{asset('images/juego_2.jpeg')}}" alt="#"/></i>
                                 <span>ESCRIBE LA LETRA</span>
                                 <p>En este juego educativo el estudiante debe escribir el trazado de cada letra y tendrá la posibilidad de realizar el trazado de cada letra del abecedario en mayúscula o en minúscula.</p>
                                 <center><a href="{{route('login')}}"><Button type="button" class="btn btn-outline-dark">Inicia sesión</Button></a></center>
                              </div>
                           </div>
                        </div>

                     <!--JUEGO 4: JUEGO DE PALABRAS-->
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <i><img src="{{asset('images/juego_4.jpeg')}}" alt="#"/></i>
                              <span>JUEGO DE PALABRAS</span>
                              <p>En este juego educativo el estudiante debe seleccionar una palabra e identificar a que imagén pertenece.</p>
                              <center><a href="{{route('login')}}"><Button type="button" class="btn btn-outline-dark">Inicia sesión</Button></a></center>
                           </div>
                        </div>
                     </div>

                     <!--JUEGO 5: ESCRIBE LA PALABRA-->
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <i><img src="{{asset('images/juego_5.jpeg')}}" alt="#"/></i>
                              <span>ESCRIBE LA PALABRA</span>
                              <p>En este juego educativo el estudiante aprenderá a escribir su nombre en diversos tipos de letra.</p>
                              <center><a href="{{route('login')}}"><Button type="button" class="btn btn-outline-dark">Inicia sesión</Button></a></center>
                           </div>
                        </div>
                     </div>

                     <!--JUEGO 6: JUEGO DE IMÁGENES-->
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <i><img src="{{asset('images/juego_7.jpeg')}}" alt="#"/></i>
                              <span>JUEGO DE IMÁGENES</span>
                              <p>En este juego educativo el estudiante debe identificar a que imagen pertenece cada palabra.</p>
                              <center><a href="{{route('login')}}"><Button type="button" class="btn btn-outline-dark">Inicia sesión</Button></a></center>
                           </div>
                        </div>
                     </div>
                  </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a>
            </div>
         </div>
      </div>
   </div>
</div>
      <!--FIN ACTUALIZACIONES-->


      <!--INICIO CONTÁCTANOS -->
      <div id="contactanos" class="contact">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding-left1">
                  <div class="contact">
                     <div class="titlepage">
                        <h2>CONTÁCTANOS</h2>
                     </div>
                     <form class="request">
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Nombre" type="text" name="Nombre">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Celular" type="text" name="Celular">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Mensaje" type="text" name="Mensaje"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Enviar</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding-right1">
                  <div id="map">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FIN CONTÁCTANOS -->


      <!--  SÍGUENOS -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="follow">
                        <h3>SÍGUENOS</h3>
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- FIN SÍGUENOS -->


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

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>DOCENTE</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-training-studio.css')}}">
    <link rel="shortcut icon" href="{{asset('images/logo_blanco.png')}}">

    </head>
    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** MENÚ ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <ul class="nav">
                            <li><a href="{{route('docente.index')}}">Dashboard</a></li>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                {{auth()->user()->name}}
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li><a href="{{route('profile.show')}}">Perfil</a></li>
                              <form action="{{route('logout')}}" method="post">
                                @csrf
                              <li><button type="submit">Cerrar sesión</button></li>
                            </form>
                            </ul>
                          </div>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    @stack('modals')
    @livewireScripts
  <!-- jQuery -->
  <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

  <!-- Bootstrap -->
  <script src="{{asset('js/popper2.js')}}"></script>
  <script src="{{asset('js/bootstrap2.min.js')}}"></script>

  <!-- Plugins -->
  <script src="{{asset('js/scrollreveal.min.js')}}"></script>
  <script src="{{asset('js/waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/imgfix.min.js')}}"></script>
  <script src="{{asset('js/mixitup.js')}}"></script>
  <script src="{{asset('js/accordions.js')}}"></script>

  <!-- Global Init -->
  <script src="{{asset('js/custom2.js')}}"></script>

</body>
</html>

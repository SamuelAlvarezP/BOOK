<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    
    <!--LOGO-->
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo_blanco.png')}}" />

    <!--TÍTULO PÁGINA-->
    <title>INICIO DE SESIÓN</title>

    <!--TÍTULO FORMULARIO -->
    <h1 class="titulo">Iniciar sesión</h1>

</head>
<body>

   <!--VALIDACIÓN ERRORES -->
    <x-jet-validation-errors class="mb-4" />
    <div class="container">
        @yield('container')
       @if (session('status'))
       <div class="mb-4 font-medium, text-sm text-green-600">
           {{ session('status') }}
       </div>
       @endif


     <!--FORMULARIO -->
    <form method="POST" action="{{ route('login') }}" class="formulario">
        @csrf

        <!--EMAIL -->
       <div class="contenedor">
        <div class="mt-4" class="input-contenedor">
            <label for="email" value="{{ __('Email') }}" >Email</label><br>
            <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" required autofocus />
        </div>

        <!--CONTRASEÑA -->
        <div class="mt-4" class="input-contenedor">
            <label for="password" value="{{ __('Password') }}" >Contraseña</label>
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>

         <!--RECUÉRDAME -->
        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
            </label>
        </div>

        <!--OLVIDO DE CONTRASEÑA -->
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>

            @endif
 <p>    </p>
            <!--BOTóN INGRESAR -->
            <x-jet-button class="ml-4" class="btn btn-success">
                {{ __('Ingresar') }}
            </x-jet-button>
        </div>
    </form>
    </div>
    </div>

    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

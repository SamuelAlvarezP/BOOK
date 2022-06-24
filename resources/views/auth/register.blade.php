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
<title>REGISTRO</title>
</head>
<body>

<!--VALIDACIONES-->

    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>
        <x-jet-validation-errors class="mb-3"/>

        <!--RUTA REGISTRAR -->
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!--NOMBRE -->
                <div class="mb-3">
                    <x-jet-label value="{{ __('Nombre') }}" />
                    <!--VALIDACIONES-->
                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="name" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>

                <!--EMAIL-->
                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />
                    <!--VALIDACIONES-->
                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                 <!--GRADO -->
                 <div class="mb-3">
                 <x-jet-label for="grado" value="{{ __('Grado') }}" />
                 <!--VALIDACIONES-->
                 <div class="d-flex">
                 <select name="group" :value="old('group')" required>
                    <option value="" disabled selected></option>
                    <option value="Preescolar">PREESCOLAR</option>
                    <option value="Primero">PRIMERO</option>
                    <option value="Segundo">SEGUNDO</option>
                 </select>
                </div>
                <x-jet-input-error for="select"></x-jet-input-error>

             </div>

                <!--CONTRASEÑA -->
                <div class="mb-3">
                    <x-jet-label value="{{ __('Contraseña') }}" />
                    <!--VALIDACIONES-->
                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <!--CONFIRMAR CONTRASEÑA -->
                <div class="mb-3">
                    <x-jet-label value="{{ __('Confirmar contraseña') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <!--POLÍTICA DE PRIVACIDAD-->
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <!--¿YA ESTÁ REGISTRADO?-->
                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('¿Ya estás registrado?') }}
                        </a>

                        <!--BOTÓN REGISTRAR -->
                        <x-jet-button>
                            {{ __('Registrar') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</body>
</html>

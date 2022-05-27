<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />

        <!--RUTA REGISTRAR -->
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!--NOMBRE -->
                <div class="mb-3">
                    <x-jet-label value="{{ __('Nombre') }}" />
                    <!--VALIDACIONES-->
                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
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
</x-guest-layout>

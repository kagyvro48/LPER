@extends("layouts.guest")

@section("body")
    <form class="my-4" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group mb-2">
            <label class="form-label" for="email">{{ value('Adresse e-mail') }}</label>
            <input
                id="email"
                class="form-control"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="email"
                placeholder="Entrez votre adresse e-mail"
            />
            @error('email')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mb-2">
            <label class="form-label" for="password">{{ value('Mot de passe') }}</label>
            <input
                id="password"
                class="form-control"
                type="password"
                name="password"
                value="{{ old('password') }}"
                required
                autofocus
                autocomplete="password"
                placeholder="Entrez votre mot de passe"
            />
            @error('password')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row mt-3">
            <div class="col-sm-6">
                <div class="form-check form-switch form-switch-success">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="customSwitchSuccess"
                        name="remember"
                    >
                    <label class="form-check-label" for="customSwitchSuccess">Se souvenir de moi</label>
                </div>
            </div>
            @if (Route::has('password.request'))
                <div class="col-sm-6 text-end">
                    <a href="{{ route('password.request') }}" class="text-muted font-13">
                        <i class="dripicons-lock"></i> Mot de passe oublié ?
                    </a>
                </div>
            @endif
        </div>

        <div class="form-group mb-0 row">
            <div class="col-12">
                <div class="d-grid mt-3">
                    <button class="btn btn-primary" type="submit">
                        Connexion <i class="fas fa-sign-in-alt ms-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <div class="text-center mb-2">
        <p class="text-muted">
            Vous n'avez pas de compte ?
            <a href="{{ route('register') }}" class="text-primary ms-2">Créer un compte gratuitement</a>
        </p>
        <h6 class="px-3 d-inline-block">Ou connectez-vous avec</h6>
    </div>

    <div class="d-flex justify-content-center">
        <a href="#" class="d-flex justify-content-center align-items-center thumb-md bg-blue-subtle text-blue rounded-circle me-2">
            <i class="fab fa-facebook align-self-center"></i>
        </a>
        <a href="#" class="d-flex justify-content-center align-items-center thumb-md bg-info-subtle text-info rounded-circle me-2">
            <i class="fab fa-twitter align-self-center"></i>
        </a>
        <a href="#" class="d-flex justify-content-center align-items-center thumb-md bg-danger-subtle text-danger rounded-circle">
            <i class="fab fa-google align-self-center"></i>
        </a>
    </div>
@endsection

@extends("layouts.guest")

@section("body")
    <form method="POST" action="{{ route('register') }}" class="my-4">
        @csrf

        <!-- Nom -->
        <div class="form-group mb-2">
            <label class="form-label" for="name">Nom</label>
            <input
                id="name"
                class="form-control"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                placeholder="Entrez votre nom"
            />
            @error('name')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Adresse e-mail -->
        <div class="form-group mb-2">
            <label class="form-label" for="email">Adresse e-mail</label>
            <input
                id="email"
                class="form-control"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                placeholder="Entrez votre adresse e-mail"
            />
            @error('email')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Mot de passe -->
        <div class="form-group mb-2">
            <label class="form-label" for="password">Mot de passe</label>
            <input
                id="password"
                class="form-control"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                placeholder="Entrez votre mot de passe"
            />
            @error('password')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Confirmer le mot de passe -->
        <div class="form-group mb-2">
            <label class="form-label" for="password_confirmation">Confirmez le mot de passe</label>
            <input
                id="password_confirmation"
                class="form-control"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="Confirmez votre mot de passe"
            />
            @error('password_confirmation')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a
                class="text-muted font-13"
                href="{{ route('login') }}"
            >
                Déjà inscrit ?
            </a>

            <button type="submit" class="btn btn-primary ms-4">
                S'inscrire
            </button>
        </div>
    </form>
@endsection

@extends("layouts.guest")

@section("body")
    <div class="mb-4 text-sm text-muted">
        Vous avez oublié votre mot de passe ? Aucun problème. Indiquez-nous simplement votre adresse e-mail, et nous vous enverrons un lien pour réinitialiser votre mot de passe.
    </div>

    <!-- Statut de la session -->
    @if(session('status'))
        <div class="alert alert-success mb-4" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="my-4">
        @csrf

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

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary">
                Envoyer le lien de réinitialisation
            </button>
        </div>
    </form>
@endsection

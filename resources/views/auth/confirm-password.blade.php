@extends("layouts.guest")
@section("body")
    <div class="mb-4 text-muted">
        Ceci est une zone sécurisée de l'application. Veuillez confirmer votre mot de passe avant de continuer.
    </div>

    <form class="my-4" method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Mot de passe -->
        <div class="form-group mb-2">
            <label class="form-label" for="password">Mot de passe</label>
            <input id="password" class="form-control" type="password" name="password"
                   required autofocus autocomplete="current-password" placeholder="Entrez votre mot de passe" />
            @error('password')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><!--end form-group-->

        <div class="form-group mb-0 row">
            <div class="col-12">
                <div class="d-grid mt-3">
                    <button class="btn btn-primary" type="submit">Confirmer <i class="fas fa-check ms-1"></i></button>
                </div>
            </div><!--end col-->
        </div> <!--end form-group-->
    </form><!--end form-->
@endsection

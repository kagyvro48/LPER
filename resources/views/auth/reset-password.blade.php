@extends("layouts.guest")
@section("body")
    <form class="my-4" method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Jeton de réinitialisation du mot de passe -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Adresse e-mail -->
        <div class="form-group mb-2">
            <label class="form-label" for="email">Adresse e-mail</label>
            <input id="email" class="form-control" type="email" name="email"
                   value="{{ old('email', $request->email) }}" required autofocus
                   autocomplete="username" placeholder="Entrez votre adresse e-mail" />
            @error('email')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><!--end form-group-->

        <!-- Mot de passe -->
        <div class="form-group mb-2">
            <label class="form-label" for="password">Mot de passe</label>
            <input id="password" class="form-control" type="password" name="password"
                   required autocomplete="new-password" placeholder="Entrez votre nouveau mot de passe" />
            @error('password')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><!--end form-group-->

        <!-- Confirmation du mot de passe -->
        <div class="form-group mb-2">
            <label class="form-label" for="password_confirmation">Confirmez le mot de passe</label>
            <input id="password_confirmation" class="form-control" type="password"
                   name="password_confirmation" required autocomplete="new-password"
                   placeholder="Confirmez votre mot de passe" />
            @error('password_confirmation')
            <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><!--end form-group-->

        <div class="form-group mb-0 row">
            <div class="col-12">
                <div class="d-grid mt-3">
                    <button class="btn btn-primary" type="submit">Réinitialiser le mot de passe <i class="fas fa-redo ms-1"></i></button>
                </div>
            </div><!--end col-->
        </div> <!--end form-group-->
    </form><!--end form-->
@endsection

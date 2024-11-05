@extends("layouts.app")

@section("body")
<div class="container">
    <h2 class="my-4">Créer un nouvel utilisateur</h2>

    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="roles" class="form-label">Rôles</label>
            <select id="multiSelect" class="form-control" name="roles[]" multiple>
                <option value="admin">Admin</option>
                <option value="editor">Éditeur</option>
                <option value="user">Utilisateur</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Numéro de téléphone</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>

        <div class="mb-3">
            <label for="profile_photo" class="form-label">Photo de profil</label>
            <input type="file" class="form-control" id="profile_photo" name="profile_photo">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">Créer l'utilisateur</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
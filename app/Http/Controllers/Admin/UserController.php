<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class UserController extends Controller
{
    // Afficher la liste des utilisateurs
    public function index(): View
    {
        $users = User::all(); // Récupérer tous les utilisateurs
        return view('admin.users.index', compact('users'));
    }

    // Afficher le formulaire de création d'un utilisateur
    public function create(): View
    {
        return view('admin.users.create');
    }

    // Stocker un nouvel utilisateur
    public function store(Request $request): RedirectResponse
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'roles' => 'required|array',
            'phone_number' => 'nullable|string|max:15',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Gestion de l'image de profil
        $profilePhotoPath = $request->file('profile_photo') ? $request->file('profile_photo')->store('profile_photos') : null;

        // Créer l'utilisateur
        User::create([
            'name' => $request->name,
            'roles' => json_encode($request->roles),
            'phone_number' => $request->phone_number,
            'profile_photo' => $profilePhotoPath,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur créé avec succès.');
    }

    // Afficher le formulaire d'édition d'un utilisateur
    public function edit(User $user): View
    {
        return view('admin.users.edit', compact('user'));
    }

    // Mettre à jour un utilisateur
    public function update(Request $request, User $user): RedirectResponse
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'roles' => 'required|array',
            'phone_number' => 'nullable|string|max:15',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Gestion de l'image de profil
        if ($request->file('profile_photo')) {
            // Supprimer l'ancienne photo si elle existe
            if ($user->profile_photo) {
                Storage::delete($user->profile_photo);
            }
            $user->profile_photo = $request->file('profile_photo')->store('profile_photos');
        }

        // Mettre à jour l'utilisateur
        $user->name = $request->name;
        $user->roles = json_encode($request->roles);
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    // Supprimer un utilisateur
    public function destroy(User $user): RedirectResponse
    {
        // Supprimer la photo de profil si elle existe
        if ($user->profile_photo) {
            Storage::delete($user->profile_photo);
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }
}

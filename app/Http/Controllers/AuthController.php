<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //REGISTER
    public function register(Request $request) {
        $request->validate([
            'username'     => 'required|string|max:255',
            'email'    => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'user',
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Inscription réussie',
            'user'    => $user,
            'token'  => $token,
        ], 201);
    }

    //LOGIN
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Identifiants incorrects.'],
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'connexion réussie',
            'user' => $user,
            'token' => $token,
        ]);
    }

    //LOGOUT
    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Déconnexion réussie',
        ]);
    }

    //GET USER CONNECTE
    public function me(Request $request) {
        return response()->json($request->user());
    }


    public function stats()
{
    return response()->json([
        'users'     => User::count(),
        'cours'     => \App\Models\Cours::count(),
        'lecons'    => \App\Models\Lecon::count(),
        'exercises' => \App\Models\Exercise::count(),
        'questions' => \App\Models\Question::count(),
    ]);
}

    public function updateProfile(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email,' . $request->user()->id,
    ]);

    $request->user()->update([
        'username' => $request->username,
        'email'    => $request->email,
    ]);

    return response()->json([
        'message' => 'Profil mis à jour',
        'user'    => $request->user(),
    ]);
}

public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password'     => 'required|min:6|confirmed',
    ]);

    if (!Hash::check($request->current_password, $request->user()->password)) {
        return response()->json(['message' => 'Mot de passe actuel incorrect'], 422);
    }

    $request->user()->update([
        'password' => Hash::make($request->new_password),
    ]);

    return response()->json(['message' => 'Mot de passe modifié avec succès']);
}
}

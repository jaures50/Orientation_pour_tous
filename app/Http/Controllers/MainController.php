<?php

namespace App\Http\Controllers;
use App\Models\Ad;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Auth;
use App\Models\Etablissement;

class MainController extends Controller
{
    // Afficher la page d'accueil
    public function index()
    {
        $ads = Ad::all();
        return view('welcome', compact('ads'));
    }

    // Afficher la vue de connexion
    public function loginView()
    {
        return view('auth.login');
    }

    // Afficher la vue d'inscription
    public function registerView()
    {
        return view('auth.register');
    }

    // Gérer l'inscription
    public function register(Request $request, RegisteredUserController $registeredUserController)
    {
        return $registeredUserController->register($request);
    }

    // Afficher la page de contact
    public function contact()
    {
        return view('contact');
    }

    // Afficher la page d'accueil après authentification
    public function home()
    {
        $ads = Ad::all();
        return view('home', compact('ads'));
    }

    // Afficher la page de profil
    public function profile()
    {
        return view('profile');
    }

    // Gérer la déconnexion
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // Afficher la page du tableau de bord
    public function dashboard()
    {
        $etablissements = Etablissement::all(); // Récupérer tous les établissements

        return view('dashboard', compact('etablissements')); // Passer la variable à la vue
    }


    // Afficher la vue pour demander le lien de réinitialisation
    public function forgotPassword()
    {
        return view('auth.passwords.email');
    }

    // Afficher la vue pour réinitialiser le mot de passe
    public function resetPassword($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }
}

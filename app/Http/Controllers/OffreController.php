<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class OffreController extends Controller
{
    public function tests()
    {
        return view('Offres.tests');
    }

    // Méthode pour traiter les résultats du test d'orientation
    public function submitTestOrientation(Request $request)
    {
        // Récupérer les réponses du test
        $q1 = $request->input('q1');
        $q2 = $request->input('q2');

        // Logique pour générer un résultat en fonction des réponses
        $resultat = "En fonction de vos réponses, nous vous conseillons d'explorer davantage le domaine des " . $q1;

        return view('Offres.resulttest', ['resultat' => $resultat]);
    }

    public function Conseillers()
    {
        return view('Offres.conseillers');
    }

    // Méthode pour traiter le formulaire de contact d'un conseiller
    public function contactConseillerSubmit(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Préparer les détails du message
        $details = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ];

        // Envoyer l'email
        try {
            Mail::to('jaureszogba@gmail.com')->send(new ContactMessage($details)); // Adresse email correcte
            return back()->with('success', 'Votre message a été envoyé avec succès !');
        } catch (\Exception $e) {
            return back()->withErrors('Erreur lors de l\'envoi de votre message. Veuillez réessayer.');
        }
    }

    public function guideMetiers()
    {
        return view('Offres.guide');
    }

    public function universitesEcoles()
    {
        return view('Offres.ecoles');
    }

    public function beninDestinationSup()
    {
        return view('Offres.benindestination');
    }
}

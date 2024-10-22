<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffreController extends Controller
{
    //

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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Logique d'envoi du message ou traitement des données

        return back()->with('success', 'Votre message a bien été envoyé !');
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
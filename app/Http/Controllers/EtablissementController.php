<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;

class EtablissementController extends Controller
{
    public function index(Request $request)
    {
        $query = Etablissement::query();

        // Filtre par ville si spécifié
        if ($request->has('ville')) {
            $query->where('ville', $request->input('ville'));
        }

        // Récupération des établissements avec tri alphabétique
        $etablissements = $query->orderBy('nom')->get();

        return view('etablissements.index', compact('etablissements'));
    }

    public function create()
    {
        return view('etablissements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'type' => 'required|in:universite,ecole',
            'adresse' => 'nullable|string|max:255',
            'ville' => 'nullable|string|max:100',
            'pays' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);

        $etablissement = new Etablissement();
        $etablissement->nom = $request->nom;
        $etablissement->type = $request->type;
        $etablissement->adresse = $request->adresse;
        $etablissement->ville = $request->ville;
        $etablissement->pays = $request->pays;

        // Gestion de l'upload de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $etablissement->image = $imagePath; // Stocke le chemin de l'image
        }

        $etablissement->save();

        return redirect()->route('etablissements.index')->with('success', 'Établissement ajouté avec succès.');
    }

    public function show($id)
    {
        $etablissement = Etablissement::findOrFail($id);
        return view('etablissements.show', compact('etablissement'));
    }

    public function edit($id)
    {
        // Trouver l'établissement par son ID
        $etablissement = Etablissement::findOrFail($id);

        // Retourner la vue d'édition avec l'établissement à modifier
        return view('etablissements.edit', compact('etablissement'));
    }

    public function update(Request $request, $id)
    {
        $etablissement = Etablissement::findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:255',
            'type' => 'required|in:universite,ecole',
            'adresse' => 'nullable|string|max:255',
            'ville' => 'nullable|string|max:100',
            'pays' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|', // Validation de l'image
        ]);

        $etablissement->nom = $request->nom;
        $etablissement->type = $request->type;
        $etablissement->adresse = $request->adresse;
        $etablissement->ville = $request->ville;
        $etablissement->pays = $request->pays;

        // Gestion de l'upload de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $etablissement->image = $imagePath; // Met à jour le chemin de l'image
        }

        $etablissement->save();

        return redirect()->route('etablissements.index')->with('success', 'Établissement mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $etablissement = Etablissement::findOrFail($id);
        $etablissement->delete();

        return redirect()->route('etablissements.index')->with('success', 'Établissement supprimé avec succès.');
    }

    public function tous()
    {
        $etablissements = Etablissement::all(); // Remplace par ta logique de récupération
        return view('etablissements.tout', compact('etablissements'));
    }
}

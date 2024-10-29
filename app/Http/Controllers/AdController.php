<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('ads.index', compact('ads'));
    }

    public function create()
    {
        return view('ads.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'link' => 'nullable|url',
            'active' => 'boolean', // Validation pour le champ active
        ]);

        $path = $request->file('image')->store('ads', 'public');
        $validated['image'] = $path;

        // Assigner 'active' à true si coché, sinon false
        $validated['active'] = $request->has('active');

        Ad::create($validated);

        return redirect()->route('ads.index')->with('success', 'Publicité créée avec succès.');
    }

    public function edit(Ad $ad)
    {
        return view('ads.edit', compact('ad'));
    }

    public function update(Request $request, Ad $ad)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'link' => 'nullable|url',
            'active' => 'boolean', // Validation pour le champ active
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('ads', 'public');
            $validated['image'] = $path;
        }

        // Assigner 'active' à true si coché, sinon false
        $validated['active'] = $request->has('active');

        $ad->update($validated);

        return redirect()->route('ads.index')->with('success', 'Publicité mise à jour avec succès.');
    }

    public function destroy(Ad $ad)
    {
        $ad->delete();
        return redirect()->route('ads.index')->with('success', 'Publicité supprimée avec succès.');
    }
}

@extends('layouts.app')

@section('title', 'Test d\'orientation')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Test d'orientation</h1>

    <p class="text-center mb-4">Répondez aux questions ci-dessous pour obtenir des conseils sur votre parcours scolaire, universitaire ou professionnel.</p>

    <form method="POST" action="{{ route('offres.tests.submit') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="q1" class="form-label">Quelle matière préférez-vous à l'école ?</label>
                <select id="q1" name="q1" class="form-select" required>
                    <option value="sciences">Sciences</option>
                    <option value="lettres">Lettres</option>
                    <option value="arts">Arts</option>
                    <option value="technologie">Technologie</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="q2" class="form-label">Quel domaine vous attire le plus ?</label>
                <select id="q2" name="q2" class="form-select" required>
                    <option value="santé">Santé</option>
                    <option value="informatique">Informatique</option>
                    <option value="commerce">Commerce</option>
                    <option value="industrie">Industrie</option>
                </select>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Voir mes résultats</button>
        </div>
    </form>
</div>
@endsection

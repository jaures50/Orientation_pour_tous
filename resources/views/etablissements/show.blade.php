@extends('layouts.app')

@section('title', 'Détails de l\'Établissement')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <!-- Image de l'établissement -->
            @if ($etablissement->image)
                <img src="{{ asset('storage/' . $etablissement->image) }}" class="img-fluid mb-3 rounded" alt="Image de {{ $etablissement->nom }}">
            @endif

            <!-- Nom de l'établissement -->
            <h2 class="card-title font-weight-bold text-center mb-4">{{ $etablissement->nom }}</h2>

            <!-- Liste des détails de l'établissement -->
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Type :</strong> {{ ucfirst($etablissement->type) }}</li>
                <li class="list-group-item"><strong>Adresse :</strong> {{ $etablissement->adresse }}</li>
                <li class="list-group-item"><strong>Ville :</strong> {{ $etablissement->ville }}</li>
                <li class="list-group-item"><strong>Pays :</strong> {{ $etablissement->pays }}</li>
            </ul>

            <!-- Bouton Retour -->
            <div class="mt-4 text-center">
                <a href="{{ route('etablissements.index') }}" class="btn btn-secondary">Retour à la liste</a>
            </div>
        </div>
    </div>
</div>
@endsection

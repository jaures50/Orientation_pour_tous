@extends('layouts.app')

@section('title', 'Liste des établissements')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center font-weight-bold">Liste des Établissements</h1>

    <!-- Formulaire de filtre -->
    <form method="GET" action="{{ route('etablissements.index') }}" class="mb-4">
        <div class="form-row">
            <div class="col-md-10 mb-3">
                <input type="text" name="ville" class="form-control" placeholder="Filtrer par ville">
            </div>
            <div class="col-md-2 mb-3">
                <button type="submit" class="btn btn-primary w-100">Filtrer</button>
            </div>
        </div>
    </form>

    <div class="row">
        <!-- Universités -->
        <div class="col-md-6">
            <h2 class="text-center font-weight-bold mb-4">Universités</h2>
            <div class="row">
                @foreach ($etablissements as $etablissement)
                @if ($etablissement->type === 'universite')
                <div class="col-md-6 mb-4">
                    <div class="card shadow-lg">
                        @if ($etablissement->image)
                        <img src="{{ asset('storage/' . $etablissement->image) }}" class="card-img-top" alt="Image de {{ $etablissement->nom }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $etablissement->nom }}</h5>
                            <p class="card-text" style="font-size: 20px;">
                                <strong style="font-size: 23px;">Adresse:</strong> {{ $etablissement->adresse }}<br>
                                <strong style="font-size: 23px;">Ville:</strong> {{ $etablissement->ville }}<br>
                                <strong style="font-size: 23px;">Pays:</strong> {{ $etablissement->pays }}
                            </p>
                            <!-- Bouton "Afficher" -->
                            <a href="{{ route('etablissements.show', $etablissement->id) }}" class="btn btn-info mt-2">Afficher</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <!-- Écoles -->
        <div class="col-md-6">
            <h2 class="text-center font-weight-bold mb-4">Écoles</h2>
            <div class="row">
                @foreach ($etablissements as $etablissement)
                @if ($etablissement->type === 'ecole')
                <div class="col-md-6 mb-4">
                    <div class="card shadow-lg">
                        @if ($etablissement->image)
                        <img src="{{ asset('storage/' . $etablissement->image) }}" class="card-img-top" alt="Image de {{ $etablissement->nom }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $etablissement->nom }}</h5>
                            <p class="card-text" style="font-size: 20px;">
                                <strong style="font-size: 23px;">Adresse:</strong> {{ $etablissement->adresse }}<br>
                                <strong style="font-size: 23px;">Ville:</strong> {{ $etablissement->ville }}<br>
                                <strong style="font-size: 23px;">Pays:</strong> {{ $etablissement->pays }}
                            </p>
                            <!-- Bouton "Afficher" -->
                            <a href="{{ route('etablissements.show', $etablissement->id) }}" class="btn btn-info mt-2">Afficher</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

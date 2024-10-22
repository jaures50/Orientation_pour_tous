@extends('layouts.app')

@section('title', 'Orientation Scolaire')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-5">Orientation Scolaire</h1>

    <div class="row">
        <!-- Carte 1: Orientation au collège -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Orientation au Collège</h5>
                    <p class="card-text">Découvrez les différentes options après le collège : Lycée général, professionnel, ou technique.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 2: Orientation au lycée -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Orientation au Lycée</h5>
                    <p class="card-text">Explorez les choix après le lycée : Université, BTS, formations professionnelles, etc.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 3: Conseils d'orientation -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Conseils d'Orientation</h5>
                    <p class="card-text">Accédez à nos services de conseils personnalisés pour bien choisir votre parcours scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">Contactez un conseiller</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('profile') }}" class="btn btn-outline-primary">Voir toutes les catégories d'orientation</a>
    </div>
</div>

@endsection

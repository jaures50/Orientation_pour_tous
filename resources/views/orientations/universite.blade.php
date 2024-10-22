@extends('layouts.app')

@section('title', 'Orientation Universitaire')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-5">Orientation Universitaire</h1>

    <div class="row">
        <!-- Carte 1: Choix des universités -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Choix des Universités</h5>
                    <p class="card-text">Explorez les meilleures universités et écoles qui correspondent à vos intérêts académiques et professionnels.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 2: Bourses d'études -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Bourses et Aides Financières</h5>
                    <p class="card-text">Accédez à des informations sur les bourses disponibles pour financer vos études universitaires.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 3: Services de conseils -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Conseils d'Orientation</h5>
                    <p class="card-text">Recevez des conseils personnalisés pour bien choisir votre programme universitaire.</p>
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

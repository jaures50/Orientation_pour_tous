@extends('layouts.app')

@section('title', 'Formation Tout au Long de la Vie')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-5">Formation Tout au Long de la Vie</h1>

    <div class="row">
        <!-- Carte 1: Formation Continue pour Adultes -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Formation Continue pour Adultes</h5>
                    <p class="card-text">Accédez à des formations spécialement conçues pour les adultes en reconversion ou en quête de nouvelles compétences.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 2: Développement Personnel et Professionnel -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Développement Personnel et Professionnel</h5>
                    <p class="card-text">Des formations pour développer vos compétences personnelles et professionnelles tout au long de votre carrière.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 3: Formations en Ligne -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Formations en Ligne</h5>
                    <p class="card-text">Des programmes flexibles et accessibles en ligne pour apprendre à votre propre rythme, quel que soit votre âge.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('profile') }}" class="btn btn-outline-primary">Voir toutes les formations disponibles</a>
    </div>
</div>

@endsection

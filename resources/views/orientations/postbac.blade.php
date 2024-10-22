@extends('layouts.app')

@section('title', 'Formation Post-Bac')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-5">Formation Post-Bac</h1>

    <div class="row">
        <!-- Carte 1: BTS et DUT -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">BTS et DUT</h5>
                    <p class="card-text">Découvrez les formations courtes comme le BTS et le DUT pour intégrer rapidement le marché du travail.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 2: Licences Professionnelles -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Licences Professionnelles</h5>
                    <p class="card-text">Optez pour une licence professionnelle afin de vous spécialiser dans un domaine précis tout en obtenant un diplôme reconnu.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 3: Préparations aux grandes écoles -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Préparations aux Grandes Écoles</h5>
                    <p class="card-text">Accédez aux meilleures préparations pour intégrer les grandes écoles d'ingénieurs ou de commerce.</p>
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

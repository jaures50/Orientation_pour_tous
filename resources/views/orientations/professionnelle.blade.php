@extends('layouts.app')

@section('title', 'Formation Professionnelle')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-5">Formation Professionnelle</h1>

    <div class="row">
        <!-- Carte 1: Certificats Professionnels -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Certificats Professionnels</h5>
                    <p class="card-text">Obtenez des certificats reconnus dans divers domaines professionnels pour booster votre carrière.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 2: Formation Continue -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Formation Continue</h5>
                    <p class="card-text">Mettez à jour vos compétences avec des formations continues adaptées aux évolutions du marché.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <!-- Carte 3: Reconversion Professionnelle -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Reconversion Professionnelle</h5>
                    <p class="card-text">Explorez des options de reconversion pour changer de carrière ou développer de nouvelles compétences.</p>
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

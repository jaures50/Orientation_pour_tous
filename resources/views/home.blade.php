@extends('layouts.app')

@section('title', 'Accueil')
<style>
    .momo {
        border: 2px solid red;
        /* Un contour rouge de 2px sur chaque côté */
        width: 1284px;
        aspect-ratio: 1284 / 1000;
        /* Ratio d’aspect de 1284:1000 */
        height: auto;
        /* La hauteur s’ajustera automatiquement selon le ratio */
    }
</style>
@section('content')
<div class="container-fluid" style="position: relative; padding: 0;">
    <!-- Conteneur principal sans contour bleu -->
    <div style=" background-color: white;">

      

        <!-- Publicités à gauche -->

        <!-- Section avec fond image -->
        <div class="hero-section " style="background-image: url('{{ asset('images/fonds.jpg') }}'); background-size: cover; background-position: center; height: 100vh; position: relative; margin-top:-16px;">
            <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); color:white;">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="text-center text-white">
                        <h1 class="display-4">Bienvenue sur notre plateforme d'orientation</h1>
                        <p class="lead">Explorez vos options scolaires, universitaires et professionnelles avec nos outils personnalisés.</p>
                        <a href="{{ route('profile') }}" class="btn btn-primary btn-lg">Commencer maintenant</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<!-- Section Services -->
<div class="container mt-5">
    <h2 class="text-center">Nos Services</h2>
    <div class="row mt-4">
        <!-- Services cards -->
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <!-- Autres cartes similaires... -->
    </div>
    <div class="row mt-4">
        <!-- Services cards -->
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <!-- Autres cartes similaires... -->
    </div>
    <div class="row mt-4">
        <!-- Services cards -->
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <!-- Autres cartes similaires... -->
    </div>
    <div class="row mt-4">
        <!-- Services cards -->
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Orientation Scolaire</h5>
                    <p class="card-text">Découvrez nos ressources pour vous orienter vers la meilleure voie scolaire.</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <!-- Autres cartes similaires... -->
    </div>
</div>
@endsection
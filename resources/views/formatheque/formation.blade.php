@extends('layouts.app')

@section('title', 'Vente de Formations')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Vente de Formations</h1>

    <p class="text-center mb-4">Découvrez nos formations pour vous aider à atteindre vos objectifs académiques et professionnels.</p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Formation A</h5>
                    <p class="card-text">Description de la formation A, ses objectifs et son contenu.</p>
                    <a href="#" class="btn btn-primary">Acheter maintenant</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Formation B</h5>
                    <p class="card-text">Description de la formation B, ses objectifs et son contenu.</p>
                    <a href="#" class="btn btn-primary">Acheter maintenant</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Formation C</h5>
                    <p class="card-text">Description de la formation C, ses objectifs et son contenu.</p>
                    <a href="#" class="btn btn-primary">Acheter maintenant</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

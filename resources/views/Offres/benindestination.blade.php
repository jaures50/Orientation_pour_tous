@extends('layouts.app')

@section('title', 'Bénin Destination Sup')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Bénin Destination Sup</h1>

    <p class="text-center mb-4">Découvrez le Bénin comme destination académique idéale pour vos études supérieures.</p>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Avantages d'étudier au Bénin</h5>
                    <p class="card-text">Le Bénin offre des programmes variés, un environnement culturel riche, et des opportunités d'échanges académiques.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Universités au Bénin</h5>
                    <p class="card-text">Explorez nos universités partenaires et leurs programmes de qualité.</p>
                    <a href="#" class="btn btn-primary">Consulter la liste</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

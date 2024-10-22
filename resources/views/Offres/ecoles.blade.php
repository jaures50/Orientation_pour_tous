@extends('layouts.app')

@section('title', 'Universités et Écoles')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Universités et Écoles</h1>

    <p class="text-center mb-4">Explorez notre sélection d'universités et d'écoles pour votre parcours académique.</p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Université A</h5>
                    <p class="card-text">Description de l'Université A, ses programmes et ses atouts.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">École B</h5>
                    <p class="card-text">Description de l'École B, ses spécialités et ses services.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Institut C</h5>
                    <p class="card-text">Description de l'Institut C, ses formations et ses opportunités.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

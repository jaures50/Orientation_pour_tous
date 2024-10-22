@extends('layouts.app')

@section('title', 'E-books')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">E-books Disponibles</h1>

    <p class="text-center mb-4">Explorez notre collection d'e-books conçus pour vous aider dans votre parcours.</p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">E-book A</h5>
                    <p class="card-text">Description de l'e-book A.</p>
                    <a href="#" class="btn btn-primary">Télécharger</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">E-book B</h5>
                    <p class="card-text">Description de l'e-book B.</p>
                    <a href="#" class="btn btn-primary">Télécharger</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">E-book C</h5>
                    <p class="card-text">Description de l'e-book C.</p>
                    <a href="#" class="btn btn-primary">Télécharger</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

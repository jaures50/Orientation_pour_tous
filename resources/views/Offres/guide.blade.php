@extends('layouts.app')

@section('title', 'Guide des Métiers')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Guide des Métiers</h1>

    <p class="text-center mb-4">Découvrez différents métiers et leurs spécificités.</p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Métiers Techniques</h5>
                    <p class="card-text">Explorez les métiers dans le domaine technique tels que l'ingénierie, l'informatique, et plus encore.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Métiers de la Santé</h5>
                    <p class="card-text">Découvrez les professions liées à la santé, incluant médecins, infirmiers, et autres.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Métiers de l'Art</h5>
                    <p class="card-text">Plongez dans le monde des métiers artistiques, comme les artistes, designers, et plus.</p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

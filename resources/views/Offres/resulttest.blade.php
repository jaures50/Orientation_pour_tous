@extends('layouts.app')

@section('title', 'Résultat du test d\'orientation')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Résultat de votre test d'orientation</h1>

    <div class="alert alert-success text-center">
        <h4>{{ $resultat }}</h4>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('offres.tests') }}" class="btn btn-outline-primary">Refaire le test</a>
    </div>
</div>
@endsection

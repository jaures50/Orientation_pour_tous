@extends('layouts.app')

@section('title', 'Listes des établissements')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Liste des Établissements</h1>

    <form method="GET" action="{{ route('etablissements.index') }}" class="mb-4">
        <div class="form-inline">
            <div class="form-group mr-2">
                <input type="text" name="ville" class="form-control" placeholder="Filtrer par ville">
            </div>
            <div class="form-group mr-2">
                <select name="type" class="form-control nav-select2">
                    <option value="">Tous types</option>
                    <option value="universite">Université</option>
                    <option value="ecole">École</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtrer</button>
        </div>
    </form>

    <div class="row">
        <!-- Universités -->
        <div class="col-md-6">
            <h2>Universités</h2>
            <ul class="list-group">
                @foreach ($etablissements as $etablissement)
                    @if ($etablissement->type === 'universite')
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <!-- Image de l'établissement -->
                                @if ($etablissement->image)
                                    <img src="{{ asset('storage/' . $etablissement->image) }}" alt="{{ $etablissement->nom }}" class="img-thumbnail mr-3" style="width: 100px; height: 100px;">
                                @else
                                    <img src="{{ asset('images/default-image.jpg') }}" alt="Image par défaut" class="img-thumbnail mr-3" style="width: 100px; height: 100px;">
                                @endif

                                <div>
                                    <strong>{{ $etablissement->nom }}</strong> - {{ $etablissement->adresse }}, {{ $etablissement->ville }}, {{ $etablissement->pays }}
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('etablissements.show', $etablissement->id) }}" class="btn btn-info btn-sm">Afficher</a>
                                <a href="{{ route('etablissements.edit', $etablissement->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>

        <!-- Écoles -->
        <div class="col-md-6">
            <h2>Écoles</h2>
            <ul class="list-group">
                @foreach ($etablissements as $etablissement)
                    @if ($etablissement->type === 'ecole')
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <!-- Image de l'établissement -->
                                @if ($etablissement->image)
                                    <img src="{{ asset('storage/' . $etablissement->image) }}" alt="{{ $etablissement->nom }}" class="img-thumbnail mr-3" style="width: 100px; height: 100px;">
                                @else
                                    <img src="{{ asset('images/default-image.jpg') }}" alt="Image par défaut" class="img-thumbnail mr-3" style="width: 100px; height: 100px;">
                                @endif

                                <div>
                                    <strong>{{ $etablissement->nom }}</strong> - {{ $etablissement->adresse }}, {{ $etablissement->ville }}, {{ $etablissement->pays }}
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('etablissements.show', $etablissement->id) }}" class="btn btn-info btn-sm">Afficher</a>
                                <a href="{{ route('etablissements.edit', $etablissement->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

   
</div>

<style>
    .nav-select2 {
        background-color: transparent;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        color: #495057;
        padding: 0.375rem 0.75rem;
        appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.5 5.5a.5.5 0 0 1 .708 0L8 10.793 13.792 5.5a.5.5 0 1 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 0.5rem center;
        background-size: 1rem;
    }

    .nav-select2:focus {
        outline: none;
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
</style>
@endsection

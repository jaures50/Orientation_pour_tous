@extends('layouts.app')

@section('title', 'Modifier l\'établissement')

@section('content')
<div class="container">
    <h1>Modifier l'établissement</h1>

    <form action="{{ route('etablissements.update', $etablissement->id) }}" method="POST" enctype="multipart/form-data"> <!-- Ajout de enctype -->
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom" class="form-label">Nom de l'établissement</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $etablissement->nom }}" required>
            @error('nom')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type d'établissement</label>
            <select name="type" class="form-control" required>
                <option value="universite" {{ $etablissement->type == 'universite' ? 'selected' : '' }}>Université</option>
                <option value="ecole" {{ $etablissement->type == 'ecole' ? 'selected' : '' }}>École</option>
            </select>
            @error('type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $etablissement->adresse }}">
            @error('adresse')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" value="{{ $etablissement->ville }}">
            @error('ville')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pays" class="form-label">Pays</label>
            <input type="text" class="form-control" id="pays" name="pays" value="{{ $etablissement->pays }}">
            @error('pays')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            <small>Actuel : <img src="{{ asset($etablissement->image) }}" alt="{{ $etablissement->nom }}" style="max-width: 100px;"></small> <!-- Affichage de l'image actuelle -->
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
        <a href="{{ route('etablissements.tout') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection

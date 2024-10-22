@extends('layouts.app')

@section('title', 'Ajouter un Établissement')

@section('content')
<h1 style="text-align: center;" class="py-4">Ajouter un Établissement</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <form method="POST" action="{{ route('etablissements.store') }}" enctype="multipart/form-data"> <!-- Ajout de enctype -->
                @csrf
                <div class="mb-3">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                    @error('nom')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <select name="type" class="form-control" required>
                        <option value="">Sélectionnez un type</option> <!-- Option par défaut -->
                        <option value="universite">Université</option>
                        <option value="ecole">École</option>
                    </select>
                    @error('type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                    @error('adresse')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <input type="text" name="ville" class="form-control" placeholder="Ville">
                    @error('ville')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <input type="text" name="pays" class="form-control" placeholder="Pays">
                    @error('pays')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="file" name="image" class="form-control" accept="image/*"> <!-- Champ pour l'image -->
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

@endsection

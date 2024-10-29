@extends('layouts.app')

@section('content')
<h1>Modifier la publicité</h1>

<form action="{{ route('ads.update', $ad) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="title">Titre :</label>
    <input class="form-control" type="text" name="title" value="{{ $ad->title }}" required> <br> <br>

    <label for="image">Image :</label>
    <input class="form-control" type="file" name="image"> <br> <br>
    <img src="{{ asset('storage/' . $ad->image) }}" alt="{{ $ad->title }}" width="100"> <!-- Affichage de l'image actuelle -->

    <label for="link">Lien (optionnel) :</label>
    <input class="form-control" type="url" name="link" value="{{ $ad->link }}"> <br> <br>

    <label for="active">Activer :</label>
    <input type="checkbox" name="active" id="active" {{ $ad->active ? 'checked' : '' }}> <!-- Checkbox pour activer/désactiver -->
    <br> <br>

    <button class="btn btn-primary" type="submit">Mettre à jour</button>
</form>
@endsection

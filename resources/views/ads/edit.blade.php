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
    <img src="{{ asset('storage/' . $ad->image) }}" alt="{{ $ad->title }}" width="100">

    <label for="link">Lien (optionnel) :</label>
    <input class="form-control" type="url" name="link" value="{{ $ad->link }}"> <br> <br>

    <label for="position">Position :</label>
    <select class="form-control" name="position" required>
        <option value="header" {{ $ad->position == 'header' ? 'selected' : '' }}>Header</option>
        <option value="sidebar" {{ $ad->position == 'sidebar' ? 'selected' : '' }}>Sidebar</option>
        <option value="footer" {{ $ad->position == 'footer' ? 'selected' : '' }}>Footer</option>
    </select> <br> <br>

    <button class="btn btn-primary" type="submit">Mettre à jour</button>
</form>
@endsection
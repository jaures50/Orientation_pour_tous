@extends('layouts.app')

@section('content')
<h1>Créer une nouvelle publicité</h1>

<form action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Titre :</label>
    <input type="text" name="title" class="form-control" required> <br> <br>

    <label for="image">Image :</label>
    <input type="file" name="image" class="form-control" required> <br> <br>

    <label for="link">Lien (optionnel) :</label>
    <input type="url" class="form-control" name="link"> <br> <br>

    <label for="position">Position :</label>
    <select name="position" class="form-control"  required>
        <option value="header">Header</option>
        <option value="sidebar">Sidebar</option>
        <option value="footer">Footer</option>
    </select> <br> <br>

    <button class="btn btn-primary" type="submit">Créer</button> <br> <br>
</form>
@endsection
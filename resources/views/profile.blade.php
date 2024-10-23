@extends('layouts.app')

@section('title', 'profile')

@section('content')



<div class="container mt-5">
    <h1 class="text-center">Profil de l'utilisateur</h1>
</div>
<!-- Formulaire de déconnexion -->
<form method="POST" action="{{ route('logout') }}" class="mt-3">
    @csrf
    <button type="submit" class="btn btn-danger">Déconnexion jojo</button>

</form>
@endsection
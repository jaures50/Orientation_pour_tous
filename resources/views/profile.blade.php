@extends('layouts.app')

@section('title', 'profile')

@section('content')



<div class="container mt-5">
    <h1 class="text-center">Profil de l'utilisateur</h1>
</div>
<!-- Formulaire de déconnexion -->
<form method="POST" action="{{ route('logout') }}" class="mt-3">
    @csrf
<<<<<<< HEAD
    <button type="submit" class="btn btn-danger">Déconnexion </button>
=======
    <button type="submit" class="btn btn-danger">Déconnexion</button>
>>>>>>> 5d380a9f842bc038e098f8eb80611ada0d7425c2

</form>
@endsection

@extends('layouts.app')

@section('title', 'Inscription')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1 class="text-center">Inscription</h1>

            <form method="POST" action="{{ route('register') }}" class="mt-4">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom complet</label>
                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input id="email" type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <!-- Champ caché pour le rôle -->
                <input type="hidden" name="role" value="user">

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>

                @if ($errors->any())
                <div class="mt-3 text-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection
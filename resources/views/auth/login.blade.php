@extends('layouts.app')

@section('title', 'Connexion')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-lg border-0 rounded"> <!-- Ajout d'ombre et arrondis -->
            <div class="card-body ">
                <h1 class="text-center mb-4">Connexion</h1>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input id="email" type="email" class="form-control" name="email" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a href="{{ route('password.request') }}" class="">Mot de passe oublié ?</a>
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}" class="">
                            {{ __('Pas encore de compte ? Inscrivez-vous ici.') }}
                        </a>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-100">Se connecter</button>
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
        </div>

    </div>
</div>

@endsection
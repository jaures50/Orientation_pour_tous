@extends('layouts.app')
<style>
    Copier le code .card {
        border-radius: 15px;
    }

    .card-header {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header text-center bg-primary text-white">
                    <h4>{{ __('Réinitialiser le mot de passe') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label for="email">{{ __('Adresse e-mail') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div> <br>

                        <div class="form-group">
                            <label for="password">{{ __('Nouveau mot de passe') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div> <br>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirmer le mot de passe') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div> <br>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Réinitialiser le mot de passe') }}
                            </button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}" class="text-uted">
                                {{ __('Retour à la connexion') }}
                            </a>
                        </div>
                    </form>
                </div>



            </div>

        </div>
    </div>
</div>
@endsection
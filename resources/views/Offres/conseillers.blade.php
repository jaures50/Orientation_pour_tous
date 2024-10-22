@extends('layouts.app')

@section('title', 'Contacts Conseillers')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Contactez nos conseillers</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <p class="text-center mb-4">Envoyez un message à nos conseillers pour recevoir des conseils personnalisés.</p>

    <form method="POST" action="{{ route('offres.conseillers.submit') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nom complet</label>
                <input id="name" type="text" class="form-control" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input id="email" type="email" class="form-control" name="email" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" class="form-control" name="message" rows="5" required></textarea>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Envoyer le message</button>
        </div>
    </form>
</div>
@endsection

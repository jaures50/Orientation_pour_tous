@extends('layouts.dashboard')
@section('title', 'Tableau de bord')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('etablissements.tout') }}">Liste des établissements</a>
                        <a class="nav-link" href="{{ route('etablissements.create') }}">Ajouter un établissement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">
                            <i class="fas fa-user"></i> Profil
                        </a>
                    </li>
                    @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-users"></i> Gestion des utilisateurs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-chart-bar"></i> Statistiques
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Bienvenue, {{ Auth::user()->name }} !</h1>
            </div>

            <!-- Content for Admin -->
            @if (Auth::user()->role == 'admin')
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Gestion des utilisateurs
                        </div>
                        <div class="card-body">
                            <p>Ici, tu peux gérer les utilisateurs de la plateforme.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Statistiques du site
                        </div>
                        <div class="card-body">
                            <p>Affiche les statistiques et performances de ton site.</p>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <!-- Content for User -->
            <div class="card">
                <div class="card-header">
                    Activités récentes
                </div>
                <div class="card-body">
                    <p>Voici les activités récentes sur ton compte.</p>
                </div>
            </div>
            @endif
        </main>
    </div>
</div>
@endsection

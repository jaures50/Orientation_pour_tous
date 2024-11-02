<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>

    <!-- Police Google -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">


    <style>
        /* Styles généraux */
        body {
            font-family: 'Nunito', sans-serif;
            background-color: white;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
        }

        .nav-link {
            font-size: 22px;
            /* taille de liens 'a' */
            font-weight: 500;
            margin: 0 10px;
        }

        .form-select {
            background-color: #f1f1f1;
            border-radius: 20px;
            padding: 5px 20px;
            font-size: 1rem;
            border: none;
            transition: background-color 0.3s;
        }

        .form-select:hover {
            background-color: #e0e0e0;
        }

        .nav-select1 {
            width: 293px;
        }

        .nav-select2 {
            width: 140px;
        }

        .nav-select3 {
            width: 230px;
        }

        #nav-select {
            border: none;
            background-color: transparent;
            font-size: 22px;
            /* Taille des selects */
            font-weight: bold;
        }

        /* Pour mieux aligner le texte du navbar */
        .navbar-nav {
            align-items: center;
        }

        /* Espacement autour des sections */
        /*  main {
            padding: 50px 0;
        } */

        .nav-item a {
            color: black !important;
            font-weight: bold;
        }

        /* Footer */
        footer {
            background-color: #f8f9fa;
            padding: 20px;
        }

        footer h5 {
            margin-bottom: 15px;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <div>
        <!-- Navigation -->
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-light  shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" height="100px" alt="Description de l'image">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <select name="navigation" id="nav-select" class="form-select nav-select1">
                                    <option disabled selected>Catégories d’orientation</option>
                                    <option value="{{ route('orientation.scolaire') }}">Orientation Scolaire</option>
                                    <option value="{{ route('orientation.universite') }}">Orientation Universitaire</option>
                                    <option value="{{ route('orientation.postbac') }}">Formation Post-Bac</option>
                                    <option value="{{ route('orientation.professionnelle') }}">Orientation Professionnelle</option>
                                    <option value="{{ route('orientation.toutvie') }}">Orientation Tout au Long de la Vie</option>
                                </select>
                            </li>
                            <li class="nav-item">
                                <select name="navigation" id="nav-select" class="form-select nav-select2">
                                    <option disabled selected>Services</option>
                                    <option value="{{ route('offres.tests') }}">Test d’orientation</option>
                                    <option value="{{ route('offres.conseillers') }}">Contact Conseillers</option>
                                    <option value="{{ route('offres.guide') }}">Guide des Métiers</option>
                                    <option value="{{ route('etablissements.index') }}">Universités & Écoles</option>
                                    <option value="{{ route('offres.benindestination') }}">Bénin Destination Sup</option>
                                </select>
                            </li>
                            <li class="nav-item">
                                <select name="navigation" id="nav-select" class="form-select nav-select3">
                                    <option disabled selected>E-books et Cours</option>
                                    <option value="{{ route('formatheque.formation') }}">Vente de Formations</option>
                                    <option value="{{ route('formatheque.ebooks') }}">E-books Payants</option>
                                </select>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tableau') }}">Bord''</a>

                            </li>
                        </ul>

                        <ul class="navbar-nav">
                            @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @if (Request::is('home'))
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @if ($ads->isEmpty())
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                        <p style="color: red;">Aucune annonce disponible.</p>
                    </div>
                </div>
                @else
                @foreach ($ads as $index => $ad)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <a href="{{ $ad->link }}" target="_blank">
                        <div class="ad-1" style="background-image: url('{{ asset('storage/' . $ad->image) }}'); height: 400px; background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        @endif




        <!-- Contenu principal -->
        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Liens Utiles</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="#">Catégories d’Orientation</a></li>
                            <li><a href="#">Orientation Scolaire</a></li>
                            <li><a href="#">Orientation Universitaire</a></li>
                            <li><a href="#">Formation Professionnelle</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>À Propos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Qui sommes-nous ?</a></li>
                            <li><a href="#">Notre Équipe</a></li>
                            <li><a href="#">Contactez-nous</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Réseaux Sociaux</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Newsletter</h5>
                        <p>Inscrivez-vous à notre newsletter pour rester informé.</p>
                        <form action="#" method="post">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Votre e-mail" required>
                            </div>
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p>&copy; 2024 Mon Application. Tous droits réservés.</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script>
        // Redirection sur changement de sélection
        document.querySelectorAll('select').forEach(function(select) {
            select.addEventListener('change', function() {
                window.location.href = this.value;
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
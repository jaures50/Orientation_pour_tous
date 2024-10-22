<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>

    <!-- Police Google -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
            font-weight: 500;
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
            color: black;
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="/">
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
                                <a class="nav-link" href="{{ route('dashboard') }}">Bord</a>

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
                            <li><a href="#">Formation Post-Bac</a></li>
                            <li><a href="#">Orientation Professionnelle</a></li>
                            <li><a href="#">Orientation Tout au Long de la Vie</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Ressources</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Test d’orientation</a></li>
                            <li><a href="#">Contact Conseillers</a></li>
                            <li><a href="#">Guide des Métiers</a></li>
                            <li><a href="#">Universités & Écoles</a></li>
                            <li><a href="#">Bénin Destination Sup</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Formations et E-books</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Formations</a></li>
                            <li><a href="#">E-books</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>À Propos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Qui sommes-nous ?</a></li>
                            <li><a href="#">Notre Mission</a></li>
                            <li><a href="#">Contactez-nous</a></li>
                            <li><a href="#">Mentions Légales</a></li>
                            <li><a href="#">Politique de Confidentialité</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-media">
                    <h5>Suivez-nous</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Facebook</a></li>
                        <li class="list-inline-item"><a href="#">Twitter</a></li>
                        <li class="list-inline-item"><a href="#">LinkedIn</a></li>
                        <li class="list-inline-item"><a href="#">Instagram</a></li>
                        <li class="list-inline-item"><a href="#">TikTok</a></li>
                    </ul>
                </div>
                <div class="contact-info">
                    <p>Email : <a href="mailto:contact@plateforme-orientations.com">contact@plateforme-orientations.com</a></p>
                    <p>Téléphone : +229 00 00 00 00</p>
                </div>
            </div>
        </footer>




    </div>

    <script>
        document.querySelectorAll('#nav-select').forEach(select => {
            select.addEventListener('change', function() {
                var selectedValue = this.value;
                if (selectedValue) {
                    window.location.href = selectedValue;
                }
            });
        });
    </script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
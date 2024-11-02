@extends('layouts.app')

@section('title', 'Contacts Conseillers')
<style>
    .bordure {
        border: 2px solid black;
        border-radius: 8px;
        padding: 15px;
        margin: 15px;
        height: auto;
        transition: 1s;
    }

    /* 
    .bordure:hover {
        box-shadow: 0 14px 25px rgba(0, 0, 0, 0.5);
        
    } */

    .bordure p a {
        text-decoration: none;
        color: black;
        font-weight: bold;
        font-size: 20px;
        transition: 2s;

    }

    .shadow-active {
        box-shadow: 0 14px 25px rgba(0, 0, 0, 0.5);
    }

    .bordure p a:hover {
        color: blue;
    }

    .taille {
        font-weight: bold !important;
        color: black;
        font-size: 20px;
    }
</style>
@section('content')
<div class="container py-5 ">
    <div>
        <h1 class="text-center mb-5">Contactez nos conseillers</h1>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <p class="text-center mb-4">Envoyez un message à nos conseillers pour recevoir des conseils personnalisés.</p>

    </div>
    <div class="row py-5">
        <div class="col-md-4">
            <div class="text-center bordure" id="shadowBox1">
                <h3>Address</h3>
                <p> Dekoungbe</p>
            </div>
            <div class="text-center bordure" id="shadowBox4">
                <h3>Address</h3>
                <p> Dekoungbe</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center bordure" id="shadowBox2">
                <h3>Mail</h3>
                <p> <a target="_blank" href="mailto:jaureszogba@gmail.com">jaureszogba@gmail.com</a></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center bordure" id="shadowBox3">
                <h3>Facebook</h3>
                <p> <a target="_blank" href="https://www.facebook.com/login/web/?privacy_mutation_token=eyJ0eXBlIjo1LCJjcmVhdGlvbl90aW1lIjoxNzMwMjE0MzI1fQ%3D%3D&cuid=AYj0ICZAK3hlCFSz62sdov7vlzkFvsKo8sk5jVbGV9kSF5BMS1rJkFA4TIWEVLz1Qw5PuBJfsx1Ovw7rRJKw8wmTlJtUAReNX5zm84IIvPNltdnJoQfXS8hReMbF_1FokxjJsds-8hBuw7ZiyZU9Yz6pF2FKKeRCqTVX5_mrIpFYmUdFQhD23LYRF4uVfDqMCd8DfgBglIeCatyATr59ck1wbPtYac8fnJpxUn7IGQ6L6aTLytSYwgUkSuOF4K8F0Yg&email=Marie&login_source=assistive_login"> Nous suivre</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15860.161705463153!2d2.349645882224804!3d6.388785088637709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102357002654b0d9%3A0xdff789dfb0793792!2sDekoungbe!5e0!3m2!1sfr!2sbj!4v1730211023207!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
        </div>
        <div class="col-md-6 py-1">

            <div class="shadow" style="padding: 16px;">
                <form method="POST" action="{{ route('offres.conseillers.submit') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class=" taille ">Nom complet</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class=" taille ">Adresse e-mail</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class=" taille ">Message</label>
                        <textarea id="message" class="form-control" name="message" rows="8" required></textarea>
                    </div>

                    <div class=" mt-4 py-4">
                        <button type="submit" class="btn btn-primary">Envoyer le message</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    // Sélection des éléments
    const boxes = [
        document.getElementById('shadowBox1'),
        document.getElementById('shadowBox2'),
        document.getElementById('shadowBox3'),
        document.getElementById('shadowBox4')
    ];

    let currentIndex = 0;
    let pausedIndex = null; // L'index de l'élément en pause

    // Fonction pour activer l'ombre de façon séquentielle, en ignorant l'élément en pause
    setInterval(() => {
        // Retirer la classe "shadow-active" de tous les éléments sauf celui en pause
        boxes.forEach((box, index) => {
            if (index !== pausedIndex) {
                box.classList.remove('shadow-active');
            }
        });

        // Passer à l'élément suivant dans la séquence si ce n'est pas l'élément en pause
        if (currentIndex === pausedIndex) {
            currentIndex = (currentIndex + 1) % boxes.length; // Passer au suivant
        }

        // Activer l'ombre sur l'élément courant si ce n'est pas l'élément en pause
        if (currentIndex !== pausedIndex) {
            boxes[currentIndex].classList.add('shadow-active');
            currentIndex = (currentIndex + 1) % boxes.length;
        }
    }, 1000); // Changement toutes les secondes

    // Gestion du survol pour ignorer l'élément survolé dans la séquence
    boxes.forEach((box, index) => {
        box.addEventListener('mouseover', () => {
            pausedIndex = index; // Mettre en pause l'élément survolé
            box.classList.remove('shadow-active'); // Désactiver l'ombre
        });

        box.addEventListener('mouseleave', () => {
            pausedIndex = null; // Reprendre normalement après le survol
        });
    });
</script>



@endsection
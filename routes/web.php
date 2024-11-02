<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use App\Http\Controllers\Auth\RegisteredUserController;
use Laravel\Fortify\Features;
use App\Http\Controllers\OrientationController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route d'accueil
Route::get('/', [MainController::class, 'index'])->name('home');

// Vues de connexion et d'inscription
Route::get('/login', [MainController::class, 'loginView'])->name('login');
Route::get('/register', [MainController::class, 'registerView'])->name('register');

// Route d'inscription
Route::post('/register', [MainController::class, 'register']);

// Route de contact
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/home', [MainController::class, 'home'])->name('home');

// Routes accessibles après authentification
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [MainController::class, 'profile'])->name('profile');
    Route::post('/logout', [MainController::class, 'logout'])->name('logout');

    // Routes spécifiques à l'admin
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    });
});

// Routes pour la réinitialisation de mot de passe
if (Features::enabled(Features::resetPasswords())) {
    Route::get('/forgot-password', [MainController::class, 'forgotPassword'])->middleware(['guest'])->name('password.request');
    Route::get('/reset-password/{token}', [MainController::class, 'resetPassword'])->middleware(['guest'])->name('password.reset');
}



/* Routes d'orientation */
Route::get('/orientation-scolaire', [OrientationController::class, 'scolaire'])->name('orientation.scolaire');
Route::get('/orientation-universite', [OrientationController::class, 'universite'])->name('orientation.universite');
Route::get('/orientation-postbac', [OrientationController::class, 'postBac'])->name('orientation.postbac');
Route::get('/orientation-professionnelle', [OrientationController::class, 'professionnelle'])->name('orientation.professionnelle');
Route::get('/orientation-toutvie', [OrientationController::class, 'toutvie'])->name('orientation.toutvie');




/* Les offres */
Route::get('/offres/tests', [OffreController::class, 'tests'])->name('offres.tests');
Route::post('/offres/tests', [OffreController::class, 'submitTestOrientation'])->name('offres.tests.submit');
Route::get('/offres/conseillers', [OffreController::class, 'Conseillers'])->name('offres.conseillers');
Route::post('/offres/conseillers', [OffreController::class, 'contactConseillerSubmit'])->name('offres.conseillers.submit');
Route::get('/offres/guide-des-metiers', [OffreController::class, 'guideMetiers'])->name('offres.guide');
Route::get('/offres/universites-et-ecoles', [OffreController::class, 'universitesEcoles'])->name('offres.ecoles');
Route::get('/offres/benin-destination-sup', [OffreController::class, 'benindestinationSup'])->name('offres.benindestination');





/* formation */
Route::get('/formatheque/vente-de-formations', [FormationController::class, 'formation'])->name('formatheque.formation');
Route::get('/formatheque/ebooks', [FormationController::class, 'ebooks'])->name('formatheque.ebooks');

use App\Http\Controllers\PaymentController;

Route::get('/payment/initiate', [PaymentController::class, 'initiatePayment'])->name('payment.initiate');
Route::get('/fedapay/callback', [PaymentController::class, 'handleCallback'])->name('fedapay.callback');
Route::get('/payment/success', function () {
    return 'Paiement réussi !'; // Page de succès
})->name('payment.success');
Route::get('/payment/failure', function () {
    return 'Échec du paiement !'; // Page d'échec
})->name('payment.failure');


/* etablissement */

use App\Http\Controllers\EtablissementController;

Route::get('/etablissements', [EtablissementController::class, 'index'])->name('etablissements.index');  // Afficher tous les établissements
Route::get('/etablissements/create', [EtablissementController::class, 'create'])->name('etablissements.create');  // Formulaire de création d'un établissement
Route::post('/etablissements', [EtablissementController::class, 'store'])->name('etablissements.store');  // Enregistrer un nouvel établissement
Route::get('/etablissements/{id}', [EtablissementController::class, 'show'])->name('etablissements.show');  // Afficher un établissement spécifique
// Route pour afficher le formulaire d'édition d'un établissement
Route::get('/etablissements/{id}/edit', [EtablissementController::class, 'edit'])->name('etablissements.edit');
// Route pour supprimer un établissement
Route::delete('/etablissements/{id}', [EtablissementController::class, 'destroy'])->name('etablissements.destroy');
// Route pour mettre à jour un établissement
Route::put('/etablissements/{id}', [EtablissementController::class, 'update'])->name('etablissements.update');

Route::get('/tout', [EtablissementController::class, 'tous'])->name('etablissements.tout'); // Route pour afficher tous les établissements


use App\Http\Controllers\AdController;

Route::resource('ads', AdController::class);


/* Routes pour admin */

Route::get('/tableau', [MainController::class, 'tableau'])->name('tableau');


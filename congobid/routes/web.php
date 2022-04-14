<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Clients\ArticlesController;
use App\Http\Controllers\Clients\ClientController;
use App\Http\Controllers\Clients\NotificationController;
use App\Http\Controllers\Clients\GagnantController;
use App\Http\Controllers\Clients\SalonController;
use App\Http\Controllers\Clients\InstructionController;
use App\Http\Controllers\Clients\EnchersController;
use App\Http\Controllers\Clients\IndexController;
use App\Http\Controllers\Clients\LoginController;
use App\Http\Controllers\Clients\ProfileController;
use App\Http\Controllers\Clients\AchatController;
use App\Http\Controllers\Clients\LanguageController;
use App\Http\Controllers\Clients\DetailEnchereController;

// use App\Http\Controllers\CommentCaMarche;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/araka', [App\Http\Controllers\PaiementController::class, 'index'])->name('paiements.index');
Route::post('/araka/store', [App\Http\Controllers\PaiementController::class, 'store'])->name('paiements.store');

Route::get('/counter', function () {
    return view('welcome');
});

// Route::get('/dashboard',[IndexController::class,'index'])->name('index');

require __DIR__ . '/auth.php';



Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

// ours rooutes
Route::get('/chat', function () {
    return view('pages.chat');
});
Route::get('/detail-article', function () {
    return view('pages.detail-article');
});
Route::get('/tarif', function () {
    return view('pages.tarif');
});
Route::get('/favoris', function () {
    return view('pages.favoris');
});
Route::get('/invite-user', function () {
    return view('pages.invite-user');
})->name('parrainage');
Route::get('/famille', function () {
    return view('pages.famille');
});
Route::get('/notification', [NotificationController::class, 'index'])->name('notifications.index');

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/valid-account', function () {
    return view('pages.valid-account');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/valid-account', function () {
    return view('pages.valid-account');
});


Route::get('/articles/detail/produit/{id}/{name}', [ArticlesController::class, 'detailArticle'])->name('detail.article');

Route::get('/articles/{id}/{id_categorie}', [ArticlesController::class, 'ArticlesAll'])->name('all.articles');
Route::get('/encheres-en-cours', [EnchersController::class, 'index'])->name('show.enchers');
Route::get('/encheres-futures', [EnchersController::class, 'future'])->name('show.enchers-future');
Route::get('/encheres-fermees', [EnchersController::class, 'gagne'])->name('show.enchers-gagne');
Route::get('/articles', [ArticlesController::class, 'articles'])->name('show.articles');
Route::get('/articles/categorie/{id}', [ArticlesController::class, 'ArticlesCategorie'])->name('categorie.article');

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/salons', [SalonController::class, 'index'])->name('clients.salons.index');
Route::get('/enchere/sanction/{id}/{enchere}/{sanction}',[DetailEnchereController::class, 'sanction'])->name('sanction');
Route::get('/comment-ca-marche', [InstructionController::class, 'index'])->name('clients.instructions.index');
Route::get('/faq', [indexController::class, 'faq'])->name('faq');
Route::get('/politique-de-confidentialite', [indexController::class, 'politique'])->name('politique');
Route::get('/terme-et-condition', [indexController::class, 'condition'])->name('terme');
Route::get('/contact', [indexController::class, 'contact'])->name('contact');

Route::get('/nos-gagnants', [GagnantController::class, 'index'])->name('clients.gagnants.index');

Route::middleware(['clients'])->group(function () {

    # Socialite URLs

    // La page où on présente les liens de redirection vers les providers
    // Route::get("login-register",[SocialiteController::class,'loginRegister']);

    // La redirection vers le provider
    Route::get("login/google", [LoginController::class, 'redirectTogoogle'])->name('login.google');

    // Le callback du provider
    Route::get("login/google/callback", [LoginController::class, 'handleGoogleCallback'])->name('google.callback');

    // end

    // La redirection vers le provider
    Route::get("login/facebook", [LoginController::class, 'redirectTofacebook'])->name('login.facebook');

    // Le callback du provider
    Route::get("login/facebook/callback", [LoginController::class, 'handleFacebookCallback'])->name('facebook.callback');

    // end
    // profil
    Route::get('/achat-bid', [AchatController::class, 'index'])->name('clients.achat.bid');
    Route::get('/achat-bid/success/{id}', [AchatController::class, 'success'])->name('achat.success');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::group(['middleware' => ['user']], function () {
        Route::get('/profil', [ProfileController::class, 'index'])->name('profil');
        Route::get('/detail-enchere/{id}', [DetailEnchereController::class, 'index'])->name('show.detail');
    });

    Route::group(['middleware' => ['admin']], function () {

        Route::get('/tableau-de-bord/administrator', [App\Http\Controllers\AccueilController::class, 'index'])->name('admin.index');

        Route::get('/tableau-de-bord/agents', [App\Http\Controllers\AdministrateurController::class, 'index'])->name('agents.index');
        Route::get('/tableau-de-bord/afficher/agents/agent/{id}', [App\Http\Controllers\AdministrateurController::class, 'indexfilter'])->name('agents.indexfilter');
        Route::get('/tableau-de-bord/afficher/agent/{id}', [App\Http\Controllers\AdministrateurController::class, 'show'])->name('agents.show');
        Route::get('/tableau-de-bord/creation/agent', [App\Http\Controllers\AdministrateurController::class, 'create'])->name('agents.create');
        Route::post('/tableau-de-bord/enregistrer/agent', [App\Http\Controllers\AdministrateurController::class, 'store'])->name('agents.store');
        Route::get('/tableau-de-bord/editer/agent/{id}', [App\Http\Controllers\AdministrateurController::class, 'edit'])->name('agents.edit');
        Route::post('/tableau-de-bord/sauvegarder/agents', [App\Http\Controllers\AdministrateurController::class, 'update'])->name('agents.update');
        Route::get('/tableau-de-bord/supprimer/agent/{id}/{state}', [App\Http\Controllers\AdministrateurController::class, 'destroy'])->name('agents.destroy');

        Route::get('/tableau-de-bord/bideurs', [App\Http\Controllers\BideurController::class, 'index'])->name('bideurs.index');
        Route::get('/tableau-de-bord/afficher/bideurs/agent/{id}', [App\Http\Controllers\BideurController::class, 'indexfilter'])->name('bideurs.indexfilter');
        Route::get('/tableau-de-bord/afficher/bideur/{id}', [App\Http\Controllers\BideurController::class, 'show'])->name('bideurs.show');
        Route::get('/tableau-de-bord/creation/bideur', [App\Http\Controllers\BideurController::class, 'create'])->name('bideurs.create');
        Route::post('/tableau-de-bord/enregistrer/bideur', [App\Http\Controllers\BideurController::class, 'store'])->name('bideurs.store');
        Route::get('/tableau-de-bord/editer/bideur/{id}', [App\Http\Controllers\BideurController::class, 'edit'])->name('bideurs.edit');
        Route::post('/tableau-de-bord/sauvegarder/bideurs', [App\Http\Controllers\BideurController::class, 'update'])->name('bideurs.update');
        Route::get('/tableau-de-bord/supprimer/bideur/{id}/{state}', [App\Http\Controllers\BideurController::class, 'destroy'])->name('bideurs.destroy');

        Route::get('/tableau-de-bord/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
        Route::get('/tableau-de-bord/afficher/client/{id}', [App\Http\Controllers\ClientController::class, 'show'])->name('clients.show');
        Route::get('/tableau-de-bord/creation/client', [App\Http\Controllers\ClientController::class, 'create'])->name('clients.create');
        Route::post('/tableau-de-bord/enregistrer/client', [App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');
        Route::get('/tableau-de-bord/editer/client/{id}', [App\Http\Controllers\ClientController::class, 'edit'])->name('clients.edit');
        Route::post('/tableau-de-bord/sauvegarder/client', [App\Http\Controllers\ClientController::class, 'update'])->name('clients.update');

        Route::get('/tableau-de-bord/categories', [App\Http\Controllers\PaquetController::class, 'index'])->name('paquets.index');
        Route::get('/tableau-de-bord/afficher/categories/agent/{id}', [App\Http\Controllers\PaquetController::class, 'indexfilter'])->name('paquets.indexfilter');
        Route::get('/tableau-de-bord/afficher/categorie/{id}', [App\Http\Controllers\PaquetController::class, 'show'])->name('paquets.show');
        Route::get('/tableau-de-bord/creation/categorie', [App\Http\Controllers\PaquetController::class, 'create'])->name('paquets.create');
        Route::post('/tableau-de-bord/enregistrer/categorie', [App\Http\Controllers\PaquetController::class, 'store'])->name('paquets.store');
        Route::get('/tableau-de-bord/editer/categorie/{id}', [App\Http\Controllers\PaquetController::class, 'edit'])->name('paquets.edit');
        Route::post('/tableau-de-bord/sauvegarder/categorie', [App\Http\Controllers\PaquetController::class, 'update'])->name('paquets.update');
        Route::get('/tableau-de-bord/supprimer/categorie/{id}/{state}', [App\Http\Controllers\PaquetController::class, 'destroy'])->name('paquets.destroy');

        Route::get('/tableau-de-bord/sous-categories', [App\Http\Controllers\CategorieController::class, 'index'])->name('categories.index');
        Route::get('/tableau-de-bord/afficher/sous-categories/agent/{id}', [App\Http\Controllers\CategorieController::class, 'indexfilter'])->name('categories.indexfilter');
        Route::get('/tableau-de-bord/afficher/sous-categorie/{id}', [App\Http\Controllers\CategorieController::class, 'show'])->name('categories.show');
        Route::get('/tableau-de-bord/creation/sous-categorie', [App\Http\Controllers\CategorieController::class, 'create'])->name('categories.create');
        Route::post('/tableau-de-bord/enregistrer/sous-categorie', [App\Http\Controllers\CategorieController::class, 'store'])->name('categories.store');
        Route::get('/tableau-de-bord/editer/sous-categorie/{id}', [App\Http\Controllers\CategorieController::class, 'edit'])->name('categories.edit');
        Route::post('/tableau-de-bord/sauvegarder/sous-categorie', [App\Http\Controllers\CategorieController::class, 'update'])->name('categories.update');
        Route::get('/tableau-de-bord/supprimer/sous-categorie/{id}/{state}', [App\Http\Controllers\CategorieController::class, 'destroy'])->name('categories.destroy');

        Route::get('/tableau-de-bord/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
        Route::get('/tableau-de-bord/afficher/articles/agent/{id}', [App\Http\Controllers\ArticleController::class, 'indexfilter'])->name('articles.indexfilter');
        Route::get('/tableau-de-bord/afficher/article/{id}', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
        Route::get('/tableau-de-bord/creation/article', [App\Http\Controllers\ArticleController::class, 'create'])->name('articles.create');
        Route::post('/tableau-de-bord/enregistrer/article', [App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
        Route::get('/tableau-de-bord/editer/article/{id}', [App\Http\Controllers\ArticleController::class, 'edit'])->name('articles.edit');
        Route::post('/tableau-de-bord/sauvegarder/article', [App\Http\Controllers\ArticleController::class, 'update'])->name('articles.update');
        Route::get('/tableau-de-bord/supprimer/article/{id}/{state}', [App\Http\Controllers\ArticleController::class, 'destroy'])->name('articles.destroy');

        Route::get('/tableau-de-bord/bids', [App\Http\Controllers\BidController::class, 'index'])->name('bids.index');
        Route::get('/tableau-de-bord/afficher/bids/agent/{id}', [App\Http\Controllers\BidController::class, 'indexfilter'])->name('bids.indexfilter');
        Route::get('/tableau-de-bord/afficher/bid/{id}', [App\Http\Controllers\BidController::class, 'show'])->name('bids.show');
        Route::get('/tableau-de-bord/creation/bid', [App\Http\Controllers\BidController::class, 'create'])->name('bids.create');
        Route::post('/tableau-de-bord/enregistrer/bid', [App\Http\Controllers\BidController::class, 'store'])->name('bids.store');
        Route::get('/tableau-de-bord/editer/bid/{id}', [App\Http\Controllers\BidController::class, 'edit'])->name('bids.edit');
        Route::post('/tableau-de-bord/sauvegarder/bid', [App\Http\Controllers\BidController::class, 'update'])->name('bids.update');
        Route::get('/tableau-de-bord/supprimer/bid/{id}/{state}', [App\Http\Controllers\BidController::class, 'destroy'])->name('bids.destroy');

        Route::get('/tableau-de-bord/gagnants', [App\Http\Controllers\GagnantController::class, 'index'])->name('gagnants.index');
        Route::get('/tableau-de-bord/afficher/gagnants/agent/{id}', [App\Http\Controllers\GagnantController::class, 'indexfilter'])->name('gagnants.indexfilter');
        Route::get('/tableau-de-bord/afficher/gagnant/{id}', [App\Http\Controllers\GagnantController::class, 'show'])->name('gagnants.show');
        Route::get('/tableau-de-bord/creation/gagnant', [App\Http\Controllers\GagnantController::class, 'create'])->name('gagnants.create');
        Route::post('/tableau-de-bord/enregistrer/gagnant', [App\Http\Controllers\GagnantController::class, 'store'])->name('gagnants.store');
        Route::get('/tableau-de-bord/editer/gagnant/{id}', [App\Http\Controllers\GagnantController::class, 'edit'])->name('gagnants.edit');
        Route::post('/tableau-de-bord/sauvegarder/gagnant', [App\Http\Controllers\GagnantController::class, 'update'])->name('gagnants.update');
        Route::get('/tableau-de-bord/supprimer/gagnant/{id}/{state}', [App\Http\Controllers\GagnantController::class, 'destroy'])->name('gagnants.destroy');

        Route::get('/tableau-de-bord/newsletters', [App\Http\Controllers\NewsletterController::class, 'index'])->name('newsletters.index');
        Route::get('/tableau-de-bord/afficher/newsletters/agent/{id}', [App\Http\Controllers\NewsletterController::class, 'indexfilter'])->name('newsletters.indexfilter');
        Route::get('/tableau-de-bord/creation/newsletter', [App\Http\Controllers\NewsletterController::class, 'create'])->name('newsletters.create');
        Route::post('/tableau-de-bord/enregistrer/newsletter', [App\Http\Controllers\NewsletterController::class, 'store'])->name('newsletters.store');
        Route::get('/tableau-de-bord/editer/newsletter/{id}', [App\Http\Controllers\NewsletterController::class, 'edit'])->name('newsletters.edit');
        Route::post('/tableau-de-bord/sauvegarder/newsletter', [App\Http\Controllers\NewsletterController::class, 'update'])->name('newsletters.update');
        Route::get('/tableau-de-bord/supprimer/newsletter/{id}', [App\Http\Controllers\NewsletterController::class, 'delete'])->name('newsletters.delete');
        Route::get('/tableau-de-bord/supprimer/newsletter/{id}/{state}', [App\Http\Controllers\NewsletterController::class, 'destroy'])->name('newsletters.destroy');

        Route::get('/tableau-de-bord/historiques', [App\Http\Controllers\HistoriqueController::class, 'index'])->name('historiques.index');

        Route::get('/tableau-de-bord/politiques', [App\Http\Controllers\PolitiqueController::class, 'index'])->name('politiques.index');
        Route::get('/tableau-de-bord/afficher/politiques/agent/{id}', [App\Http\Controllers\PolitiqueController::class, 'indexfilter'])->name('politiques.indexfilter');
        Route::get('/tableau-de-bord/creation/politique', [App\Http\Controllers\PolitiqueController::class, 'create'])->name('politiques.create');
        Route::post('/tableau-de-bord/enregistrer/politique', [App\Http\Controllers\PolitiqueController::class, 'store'])->name('politiques.store');
        Route::get('/tableau-de-bord/editer/politique/{id}', [App\Http\Controllers\PolitiqueController::class, 'edit'])->name('politiques.edit');
        Route::post('/tableau-de-bord/sauvegarder/politique', [App\Http\Controllers\PolitiqueController::class, 'update'])->name('politiques.update');
        Route::get('/tableau-de-bord/supprimer/politique/{id}', [App\Http\Controllers\PolitiqueController::class, 'delete'])->name('politiques.delete');
        Route::get('/tableau-de-bord/supprimer/politique/{id}/{state}', [App\Http\Controllers\PolitiqueController::class, 'destroy'])->name('politiques.destroy');

        Route::get('/tableau-de-bord/faqs', [App\Http\Controllers\FaqController::class, 'index'])->name('faqs.index');
        Route::get('/tableau-de-bord/afficher/faqs/agent/{id}', [App\Http\Controllers\FaqController::class, 'indexfilter'])->name('faqs.indexfilter');
        Route::get('/tableau-de-bord/creation/faq', [App\Http\Controllers\FaqController::class, 'create'])->name('faqs.create');
        Route::post('/tableau-de-bord/enregistrer/faq', [App\Http\Controllers\FaqController::class, 'store'])->name('faqs.store');
        Route::get('/tableau-de-bord/editer/faq/{id}', [App\Http\Controllers\FaqController::class, 'edit'])->name('faqs.edit');
        Route::post('/tableau-de-bord/sauvegarder/faq', [App\Http\Controllers\FaqController::class, 'update'])->name('faqs.update');
        Route::get('/tableau-de-bord/supprimer/faq/{id}', [App\Http\Controllers\FaqController::class, 'delete'])->name('faqs.delete');
        Route::get('/tableau-de-bord/supprimer/faq/{id}/{state}', [App\Http\Controllers\FaqController::class, 'destroy'])->name('faqs.destroy');

        Route::get('/tableau-de-bord/sanctions', [App\Http\Controllers\SanctionController::class, 'index'])->name('sanctions.index');
        Route::get('/tableau-de-bord/afficher/sanctions/agent/{id}', [App\Http\Controllers\SanctionController::class, 'indexfilter'])->name('sanctions.indexfilter');
        Route::get('/tableau-de-bord/creation/sanction', [App\Http\Controllers\SanctionController::class, 'create'])->name('sanctions.create');
        Route::post('/tableau-de-bord/enregistrer/sanction', [App\Http\Controllers\SanctionController::class, 'store'])->name('sanctions.store');
        Route::get('/tableau-de-bord/editer/sanction/{id}', [App\Http\Controllers\SanctionController::class, 'edit'])->name('sanctions.edit');
        Route::post('/tableau-de-bord/sauvegarder/sanctions', [App\Http\Controllers\SanctionController::class, 'update'])->name('sanctions.update');

        Route::get('/tableau-de-bord/comment-ca-marche', [App\Http\Controllers\CommentCaMarche::class, 'index'])->name('commentcamarche.index');
        Route::get('/tableau-de-bord/afficher/comment-ca-marche/{id}', [App\Http\Controllers\CommentCaMarche::class, 'show'])->name('commentcamarche.show');
        Route::get('/tableau-de-bord/creation/comment-ca-marche', [App\Http\Controllers\CommentCaMarche::class, 'create'])->name('commentcamarche.create');
        Route::post('/tableau-de-bord/enregistrer/comment-ca-marche', [App\Http\Controllers\CommentCaMarche::class, 'store'])->name('commentcamarche.store');
        Route::get('/tableau-de-bord/editer/comment-ca-marche/{id}', [App\Http\Controllers\CommentCaMarche::class, 'edit'])->name('commentcamarche.edit');
        Route::post('/tableau-de-bord/sauvegarder/comment-ca-marche', [App\Http\Controllers\CommentCaMarche::class, 'update'])->name('commentcamarche.update');
        Route::get('/tableau-de-bord/supprimer/comment-ca-marche/{id}/{state}', [App\Http\Controllers\CommentCaMarche::class, 'destroy'])->name('commentcamarche.destroy');

        Route::get('/tableau-de-bord/salons', [App\Http\Controllers\SalonController::class, 'index'])->name('salons.index');
        Route::get('/tableau-de-bord/afficher/salon/{id}', [App\Http\Controllers\SalonController::class, 'show'])->name('salons.show');
        Route::get('/tableau-de-bord/creation/salon', [App\Http\Controllers\SalonController::class, 'create'])->name('salons.create');
        Route::post('/tableau-de-bord/enregistrer/salon', [App\Http\Controllers\SalonController::class, 'store'])->name('salons.store');
        Route::get('/tableau-de-bord/editer/salon/{id}', [App\Http\Controllers\SalonController::class, 'edit'])->name('salons.edit');
        Route::post('/tableau-de-bord/sauvegarder/salon', [App\Http\Controllers\SalonController::class, 'update'])->name('salons.update');
    });
});

// end route
// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

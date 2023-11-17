<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QB;
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

Route::get('/', function () {
    return view('index');
});
//// ! pour l'insertion
Route::post('/addligneF',[QB::class,'AddLigneFour'])->name('addligne.Fournisseur');
Route::post('/addligneA',[QB::class,'AddLigneArticle'])->name('addligne.Articles');

//// ! les questions
//// ? Ecrire des requêtes permettant de formuler les besoins en informations ci-dessous en utilisant Query Builder :


//   Q1 liste des fournisseurs

Route::post('/listeF', [QB::class, 'liste_fournisseurs'])->name('liste_fournisseurs');
Route::get('/listeF', function () {
    return view('listeF');
});

// Q2 La liste des fournisseurs d’Agadir.
Route::post('/listeFAgadir',[QB::class,'fournisseurs_Agadir'])->name('fournisseurs_Agadir');
// Q3 Les noms et les villes des fournisseurs.
Route::post('/listeVF',[QB::class,'fournisseurs_NF'])->name('fournisseurs_NF');
// Q4 Les désignations et les poids des articles.
Route::post('/listeDpoids',[QB::class,'désignations_poids'])->name('désignations_poids');
// Q5 Les numéros et les désignations des articles de couleur verte
Route::post('/listeNcouleur',[QB::class,'désignations_couleur'])->name('désignations_couleur');
// Q6 Les désignations des articles de couleur verte ayant un prix d’achat supérieur à 500.
Route::post('/listeACVP',[QB::class,'prix_supérieur'])->name('prix_supérieur');

// Q7 Les articles ayant un poids entre 200 et 300.
Route::post('/listeAEP23',[QB::class,'poids_entre'])->name('poids_entre');
// Q8	Le nombre d’articles.
Route::post('/listeCountA',[QB::class,'nombreA'])->name('nombreA');
// 	La moyenne des prix d’achat.
Route::post('/listeMoyenneA',[QB::class,'moyennePA'])->name('moyennePA');


//   Complément TP Query Builder
Route::post('/les_articles_de_F',[QB::class,'articleDF'])->name('les_articles_de_F');

Route::delete('/articles/{article}', [QB::class,'destroy'])->name('articles.destroy');
Route::get('/articles/{article}/edit',[QB::class,'edit'])->name('articles.edit');

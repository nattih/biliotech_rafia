<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// les routres par defaut de laravel
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/4', function () {
    return view('welcome');
});

//mes routes pour mon projet bibliotheque
Route::get('/', 'AccueilController@dashboard')->name('dashboard');

//innscrire un membre admin
Route::post('/inscription', 'inscriptionController@inscription')->name('membre.store');

// route pour enregistrer un auteur, un type, pays, annee et un livre
Route::get('/ajouterlivre', 'AjoutController@form')->name('ajout.livre');
Route::post('/ajouter_auteur', 'AjoutController@auteur_store')->name('auteur.store');
Route::post('/ajouter_annee', 'AjoutController@annee_store')->name('annee.store');
Route::post('/ajouter_type', 'AjoutController@type_store')->name('type.store');
Route::post('/ajouter_pays', 'AjoutController@pays_store')->name('pays.store');
Route::post('/ajouterlivre', 'AjoutController@livre_store')->name('livre.store');

//  route pour lister tous les livres, modifier et supprimer un livre
Route::get('/liste', 'ListeController@index')->name('index.livre');
Route::delete('/supprimer_livre/{livre}', 'ListeController@destroy')->name('delete.livre');
Route::get('/edit_livre/{livre}', 'ListeController@edit')->name('livre.edit');
Route::put('/update_livre/{livre}', 'ListeController@update')->name('livre.update');

//  route pour lister par auteur , par type
Route::get('/classement', 'ClassementController@classement')->name('classement.livre');
Route::get('/auteur_livre/{auteur}', 'ClassementController@auteur_livre')->name('auteur.detail');
Route::get('/type_livre/{type}', 'ClassementController@type_livre')->name('type.detail');

//  route pour le nombre de livre  par auteur , type, pays, annee 
Route::get('/stock', 'ClassementController@nombre')->name('livre.stock');

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Livre;
use App\Auteur;
use App\Type;
use App\Annee;
use App\Paye;

class AjoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //route pour afficher le formulaire
    public function form(){
        $auteurs= Auteur::all()->sortBy('nom');
        $annees= Annee::all()->sortByDesc('parution');
        $types= Type::all()->sortBy('type');
        $pays= Paye::all()->sortBy('pays');
        return view('ajouterlivre', compact('auteurs', 'annees', 'types', 'pays'));
    }

    public function auteur_store(Request $request){

        //insertion dans la table auteur
        Auteur::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
        ]);
            Session::flash('message', 'Un livre  a été ajouté avec success.');
            Session::flash('alert-class', 'alert-success text-center');
        return redirect()->back();   
    }

    public function annee_store(Request $request){

        //insertion dans la table annee
        Annee::create([
            'parution' => $request['parution'],
        ]);
            Session::flash('message', 'Année  a été ajoutée avec success.');
            Session::flash('alert-class', 'alert-success text-center');
        return redirect()->back();   
    }
    
    public function type_store(Request $request){

        //insertion dans la table type
        Type::create([
            'type' => $request['type'],
        ]);
            Session::flash('message', 'Année  a été ajoutée avec success.');
            Session::flash('alert-class', 'alert-success text-center');
        return redirect()->back();   
    }

    public function pays_store(Request $request){

        //insertion dans la table pays
        Paye::create([
            'pays' => $request['pays'],
        ]);
            Session::flash('message', 'Année  a été ajoutée avec success.');
            Session::flash('alert-class', 'alert-success text-center');
        return redirect()->back();   
    }
    //pour enregistrer dans la base de données
    public function livre_store(Request $request){

         //recuperation des cles etrangeres et insertion dans la table livres
         Livre::create([
            'titre' => $request['titre'],
            'auteur_id' =>  $request['auteur_id'],
            'paye_id' =>$request['paye_id'],
            'type_id' =>$request['type_id'],
            'annee_id' => $request['annee_id'],

        ]);
            Session::flash('message', 'Un livre  a été ajouté avec success.');
            Session::flash('alert-class', 'alert-success text-center');
        return redirect()->back();

        
    }
    
}

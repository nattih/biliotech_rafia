<?php

namespace App\Http\Controllers;

use App\Annee;
use App\Livre;
use App\Auteur;
use App\Paye;
use App\Type;

class ClassementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function classement(){
        $auteurs=Auteur::orderBy('nom', 'asc')->paginate(15);
        $types=Type::orderBy('type', 'asc')->paginate(15);
        return view('classementLivre',compact('auteurs', 'types'));
    } 
    public function auteur_livre($auteur){
        $livres=Livre::where('auteur_id', '=', $auteur)->get();
        return view('auteur_detail',compact('livres'));
    }
    public function type_livre($type){
        $livres=Livre::where('type_id', '=', $type)->get();
        return view('type_detail',compact('livres', 'type'));
    }
    public function nombre(){
        $auteurs= Auteur::orderBy('nom', 'asc')->paginate(6);
        $pays= Paye::orderBy('pays', 'asc')->paginate(6);
        $types= Type::orderBy('type', 'asc')->paginate(6);
        $annes= Annee::orderBy('parution', 'desc')->paginate(6) ;
        return view('stock', compact('auteurs', 'pays', 'types', 'annes'));
    } 
}
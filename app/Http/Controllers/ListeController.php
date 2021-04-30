<?php

namespace App\Http\Controllers;

use App\Paye;
use App\Type;
use App\Annee;
use App\Livre;
use App\Auteur;
use Illuminate\Http\Request;
 class ListeController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $livres=Livre::paginate(5);
            return view('liste', compact('livres'));
    }

    public function edit(Livre $livre){
        $auteurs= Auteur::all();
        $pays= Paye::all();
        $types= Type::all();
        $annes= Annee::all()->sortByDesc('parution');
        return view('modifier', compact('livre', 'auteurs', 'pays', 'types', 'annes'));
    }

    public function update(Request $request, Livre $livre)
    {
          $livre->titre=$request->titre;
          $livre->type_id=$request->type_id;
          $livre->paye_id=$request->paye_id;
          $livre->auteur_id=$request->auteur_id;
          $livre->annee_id=$request->annee_id;
          $livre->save();
          return redirect()->route('index.livre',$livre);
    }
    public function destroy(Livre $livre)
    {
        $livre->delete();
        return back();
    }
}

@extends('layouts.menu')
@section('contenu')
<div class="mt-3 d-flex justify-content-center"><a href="{{route('dashboard')}}" class=" btn btn-warning">Fermer</a></div> 
        <div class="row">
            <div class="col-6">
                <div class="wrapper fadeInDown">
                    <div id="formContent" class="">
                        @if(Session::has('message'))
                            <p class="alert yes_inscrit {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <h2 class="active debut ">Ajouter un livre</h2>
                        <form action="{{route('livre.store')}}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-3 mt-4">Titre : </label>
                                                <input type="text" class="fadeIn second" name="titre" value="{{ old('titre')}}" placeholder="Entrez le titre">
                                              </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-3">Type : </label>
                                                <select class="form-control custom-select col-8" name="type_id" value="{{ old('_id') }}" >
                                                    <option value="">Choisir le type</option>
                                                    @foreach($types as $type)  
                                                        <option value="{{$type->id}} "  >{{$type->type}}</option>
                                                    @endforeach
                                                </select>
                                              </div>
                                              
                                              <div class="form-group row">
                                                <label class="col-3">Auteur : </label>
                                                <select class="form-control custom-select col-8" name="auteur_id" value="{{ old('auteur_id') }}" >
                                                    <option value="">Choisir l'Auteur</option>
                                                    @foreach($auteurs as $auteur)  
                                                        <option value="{{$auteur->id}} ">{{$auteur->nom}} {{$auteur->prenom}}</option>
                                                    @endforeach
                                                </select>
                                              </div>
                        
                                              <div class="form-group row">
                                                <label class="col-3">Pays : </label>
                                                <select class="form-control custom-select col-8" name="paye_id" value="{{ old('paye_id') }}" >
                                                    <option value="">Choisir le pays</option>
                                                    @foreach($pays as $pay)  
                                                        <option value="{{$pay->id}} "  >{{$pay->pays}}</option>
                                                    @endforeach
                                                </select>
                                              </div>
                                              <div class="form-group row">
                                                <label class="col-3">Parution : </label>
                                                <select class="form-control custom-select col-8" name="annee_id" value="{{ old('annee_id') }}" >
                                                    <option value="">Choisir l'année</option>
                                                    @foreach($annees as $anne)  
                                                        <option value="{{$anne->id}} "  >{{$anne->parution}}</option>
                                                    @endforeach
                                                </select>
                                              </div>
                                           
                            <input type="submit" class=" fadeIn fourth" value="Ajouter">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                    <div class="wrapper fadeInDown">
                    <div id="formContent" class="">
                        <h2 class="active debut ">Ajouter un auteur</h2>
                        <form action="{{route('auteur.store')}}" method="post">
                                            {{ csrf_field() }}
                            <input type="text" class="fadeIn second" name="nom" placeholder="Nom">
                            <input type="text" class="fadeIn second" name="prenom" placeholder="Prénom(s)">
                            <input type="submit" class=" fadeIn fourth" value="Ajouter">
                        </form>
                    </div>
                </div>
                    </div>
                    <div class="col-6">
                    <div class="wrapper fadeInDown">
                    <div id="formContent" class="">
                        <h2 class="active debut ">Ajouter une année</h2>
                        <form action="{{route('annee.store')}}" method="post">
                                            {{ csrf_field() }}
                            <input type="text" class="fadeIn second" name="parution" placeholder="Date de parution">
                            <input type="submit" class=" fadeIn fourth" value="Ajouter">
                        </form>
                    </div>
                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                    <div class="wrapper fadeInDown">
                    <div id="formContent" class="">
                        <h2 class="active debut ">Ajouter un type</h2>
                        <form action="{{route('type.store')}}" method="post">
                                            {{ csrf_field() }}
                            <input type="text" class="fadeIn second" name="type" placeholder="Type">
                            <input type="submit" class=" fadeIn fourth" value="Ajouter">
                        </form>
                    </div>
                </div>
                    </div>
                    <div class="col-6">
                    <div class="wrapper fadeInDown">
                    <div id="formContent" class="">
                        <h2 class="active debut ">Ajouter un pays</h2>
                        <form action="{{route('pays.store')}}" method="post">
                                            {{ csrf_field() }}
                            <input type="text" class="fadeIn third" name="pays" placeholder="Pays">
                            <input type="submit" class=" fadeIn fourth" value="Ajouter">
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
   
    <div>
        <a class="lien_liste" href="{{route('index.livre')}}"><h4>Voir la liste des livres ajoutés.</h4></a>
    </div>

    @endsection
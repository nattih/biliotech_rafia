@extends('layouts.menu')
@section('contenu')
    <div class="row">
        <div class="col-3">
            <div class="bloc_gauche">
                <div class="container">
                    
                    <a  href="{{route('index.livre')}}">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-9 gauche_un">
                                <h3 >Mes Livres</h3>
                                <img class="ml-1 imggauche_un" src="{{asset('Images/blueBook_26px.png')}} " width="40px" height="40px" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </a>
                    <a href="{{route('livre.stock')}}">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-9 gauche_un">
                                <h3 >Mon Stock</h3>
                                <img class="ml imggauche_un" src="{{asset('Images/blueBook_26px.png')}}" width="40px" height="40px" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </a>
                    <a href="{{route('classement.livre')}}">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-9 gauche_un">
                                <h3 >Classement</h3>
                                <img class="ml imggauche_un" src="{{asset('Images/blueBook_26px.png')}}" width="40px" height="40px" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </a>
                    <a href="{{route('ajout.livre')}}">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-9 gauche_un">
                                <h3 >Ajouter</h3>
                                <img class="ml-2 imggauche_un" src="{{asset('Images/blueBook_26px.png')}}" width="40px" height="40px" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-0"></div>
        <div class="col-9">
            <div class="wrapper fadeInDown">
                <div class="mb-3"><a href="{{route('index.livre')}}" class=" btn btn-warning">Fermer</a></div> 
                <div id="formContent" class="">
                    <h4 class="active debut">Modifier livre : <span>{{$livre->titre}}</span></h4>
                    <div class="fadeIn first">
                    </div>
                    <form action="{{route('livre.update' , $livre->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-3 mt-4">Titre : </label>
                        <input type="text" class="fadeIn second" name="titre" value="{{ old('titre')  ?? $livre->titre }}">
                      </div>
                    
                    <div class="form-group row">
                        <label class="col-3">Type : </label>
                        <select class="form-control custom-select col-8" name="type_id" value="{{ old('type_id') }}" >
                            <option >choisir le type</option>
                            @foreach($types as $type)  
                                <option value="{{$type->id}} " {{$livre->type_id == $type->id ? 'selected' : ''}}>{{$type->type}}</option>
                            @endforeach
                        </select>
                      </div>
                      
                      <div class="form-group row">
                        <label class="col-3">Auteur : </label>
                        <select class="form-control custom-select col-8" name="auteur_id" value="{{ old('auteur_id') }}" >
                            <option >choisir l'Auteur</option>
                            @foreach($auteurs as $auteur)  
                                <option value="{{$auteur->id}} " {{$livre->auteur_id == $auteur->id ? 'selected' : ''}}>{{$auteur->nom}} {{$auteur->prenom}}</option>
                            @endforeach
                        </select>
                      </div>

                      <div class="form-group row">
                        <label class="col-3">Pays : </label>
                        <select class="form-control custom-select col-8" name="paye_id" value="{{ old('paye_id') }}" >
                            <option >choisir le pays</option>
                            @foreach($pays as $pay)  
                                <option value="{{$pay->id}} " {{$livre->paye_id == $pay->id ? 'selected' : ''}}>{{$pay->pays}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group row">
                        <label class="col-3">Parution : </label>
                        <select class="form-control custom-select col-8" name="annee_id" value="{{ old('annee_id') }}" >
                            <option >choisir la date de parution</option>
                            @foreach($annes as $anne)  
                                <option value="{{$anne->id}}" {{$livre->annee_id == $anne->id ? 'selected' : ''}}>{{$anne->parution}}</option>
                            @endforeach
                        </select>
                      </div>
                   
                    <input type="submit" class=" fadeIn fourth" value="Modifier">
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="col-0"></div>
    </div>
@endsection
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
            <div class="mt-1 d-flex justify-content-center"><a href="{{route('classement.livre')}}" class=" btn btn-warning">Fermer</a></div> 
            <div class="container card mt-1">
              <div class="row card-body">
                <div class="col table table-responsive p-0">
                     <h4 class="text-center ">Nombre de livre de l'auteur : {{$livres->count()}}</h4>
                <table class="table table-striped table-hover">
                    <thead>
                      <tr class="bg-success text-white  text-center">
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Annee de parution</th>
                        <th scope="col">Date d'enregistrement</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($livres as $key=>$livre)
                      <tr class="  text-center">
                        <th scope="row">{{++$key}}</th>
                        <td> {{$livre->titre}}</td>
                        <td> {{$livre->annee->parution}}</td>
                        <td> {{$livre->created_at->format('d/m/y à H:m')}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div> 
            </div>
            </div>
        </div>
        <div class="col-0"></div>
    </div>
@endsection
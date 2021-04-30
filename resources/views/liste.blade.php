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
            <div class="mt-1 d-flex justify-content-center"><a href="{{route('dashboard')}}" class=" btn btn-warning">Fermer</a></div> 
            <div class="container card  mt-1">
              <div class="row card-body">
                <div class="col table table-responsive p-0">
                     <h4 class="text-center ">Nombre total de livre : {{$livres->count()}}</h4>
                <table class="table table-striped table-hover">
                    <thead>
                      <tr class="bg-dark text-white  text-center">
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">type</th>
                        <th scope="col">Pays</th>
                        <th scope="col">Parution</th>
                        <th scope="col">Date d'ajout</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($livres as $key=>$livre)
                      <tr class="  text-center" >
                        <th  scope="row">{{++$key}}</th>
                        <td> {{$livre->titre}}</td>
                        <td> {{$livre->auteur->nom}} {{$livre->auteur->prenom}}</td>
                        <td> {{$livre->type->type}}</td>
                        <td> {{$livre->paye->pays}}</td>
                        <td> {{$livre->annee->parution}}</td>
                        <td> {{$livre->created_at->format('d/m/y à H:m')}}</td>
                        <td> 
                            <a href="{{route('livre.edit',$livre->id)}}"><button class="btn btn-info"><i class="fa icofont-edit"></i></button></a>
                            <form action="{{route('delete.livre', $livre->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick='return confirm("Voulez-vous vraiment supprimer ce livre?")';  type="submit" class="btn btn-danger d-inline"><i class="fas icofont-trash"></i></button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div> {{$livres->links()}}</div>
                </div> 
            </div>
            </div>
        </div>
        <div class="col-0"></div>
    </div>
@endsection
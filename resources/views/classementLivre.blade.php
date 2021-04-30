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
                                <img class="ml-1 imggauche_un" src="Images/blueBook_26px.png" width="40px" height="40px" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </a>
                    <a href="{{route('livre.stock')}}">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-9 gauche_un">
                                <h3 >Mon Stock</h3>
                                <img class="ml imggauche_un" src="Images/blueBook_26px.png" width="40px" height="40px" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </a>
                    <a href="{{route('classement.livre')}}">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-9 gauche_un">
                                <h3 >Classement</h3>
                                <img class="ml imggauche_un" src="Images/blueBook_26px.png" width="40px" height="40px" alt="">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </a>
                    <a href="{{route('ajout.livre')}}">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-9 gauche_un">
                                <h3 >Ajouter</h3>
                                <img class="ml-2 imggauche_un" src="Images/blueBook_26px.png" width="40px" height="40px" alt="">
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
            <div class="container card mt-1">
              <div class="row card-body">
                <div class="col-6">
                    <h3 class=" card-title">Livre par Auteur </h3>
                    <div class="row d-flex ">
                      @foreach ($auteurs as $auteur)
                      <a class="btn btn-success mb-3 ml-2"  href="{{route('auteur.detail', $auteur->id)}}">{{$auteur->nom}} {{$auteur->prenom}}</a> 
                      @endforeach
                    </div>
                    <div> {{$auteurs->links()}}</div>
                </div> 
                <div class="col-6">
                    <h3>Livre par type </h3>
                    <div class="row d-flex">
                      @foreach ($types as $type)
                      <a class="btn btn-info mb-3 ml-2"  href="{{route('type.detail', $type->id)}}">{{$type->type}}</a> 
                      @endforeach
                    </div>
                    <div> {{$types->links()}}</div>
                </div> 
            </div>
        <div class="mt-4">
            <a class="lien_liste" href="{{route('index.livre')}}"><h4>Voir la liste complète des livres</h4></a>
        </div> 
            </div>
        </div>
        <div class="col-0"></div>
    </div>
@endsection
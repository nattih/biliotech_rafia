@extends('layouts.menu')
@section('contenu')
    <div class="container-fluid">
      <div class="mt-1 d-flex justify-content-center"><a href="{{route('dashboard')}}" class=" btn btn-warning">Fermer</a></div> 
        <h4 class="text-center ">Le nombre de nos livres</h4>
        <div class="row">
            <div class="col-3">
                <table class="table table-striped">
                    <thead>
                      <tr class="bg-dark text-white  text-center"> 
                        <th scope="col">Auteur</th>
                        <th scope="col">nombre</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($auteurs as  $auteur)
                        <tr> 
                            <td>{{ $auteur->nom}} {{ $auteur->prenom}}</td>
                            <td><span class="text-white font-weight-bold btn-sm bg-dark">{{ $auteur->livres()->count()}}</span></td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div> {{$auteurs->links()}}</div>
            </div>  
            <div class="col-3 ">
                <table class="table table-striped">
                    <thead>
                      <tr class="bg-dark text-white  text-center"> 
                        <th scope="col">Pays</th>
                        <th scope="col">nombre de livre</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($pays as $pay)
                        <tr class=" text-center"> 
                            <td>{{ $pay->pays}}</td>
                            <td><span class="text-white font-weight-bold btn-sm bg-dark">{{ $pay->livres()->count()}}</span></td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div> {{$pays->links()}}</div>
            </div> 
            <div class="col-3  ">
                <table class="table table-striped">
                    <thead>
                      <tr class="bg-dark text-white  text-center"> 
                        <th scope="col">Type de livre</th>
                        <th scope="col">nombre de livre</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                        <tr class=" text-center">
                            <td>{{ $type->type}}</td>
                            <td> <span class="text-white font-weight-bold btn-sm bg-dark">{{ $type->livres()->count()}}</span></td>
                          </tr>
                        @endforeach 
                    </tbody>
                  </table>
                  <div> {{$types->links()}}</div>
            </div> 
            <div class="col-3 ">
                <table class="table table-striped">
                    <thead>
                      <tr class="bg-dark text-white  text-center">
                        <th scope="col">Année</th>
                        <th scope="col">nombre de livre</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($annes as $anne)
                        <tr class=" text-center">
                            <td>{{ $anne->parution}}</td>
                            <td> <span class="text-white font-weight-bold btn-sm bg-dark">{{ $anne->livres()->count()}}</span></td>
                          </tr>
                        @endforeach 
                    </tbody>
                  </table>
                  <div> {{$annes->links()}}</div>
            </div> 
        </div>
    </div>
    <div>
        <a class="lien_liste" href="{{route('index.livre')}}"><h4>Voir la liste des livres ajoutés.</h4></a>
    </div>
    @endsection
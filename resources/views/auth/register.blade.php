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
            <div class="container card mt-1">
                <div class="row card-body">
                    <div class="wrapper fadeInDown">
                        <div id="formContent">
                            <h2 class="active debut">Inscription</h2>
                            <div class="fadeIn first">
                            </div>
                            <form action="{{route('membre.store')}}" method="post">
                             @csrf
                            <input type="text" id="login" class="fadeIn second" name="name" placeholder="Nom d'utilisateur">
                            <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
                            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
                            <input type="password" id="password" class="fadeIn third" name="password_confirmation" placeholder="Confirmez votre mot de passe">
                            <input type="submit" class=" fadeIn fourth" value="S'inscrire">
                            </form>
                        </div>
                        <a class="lien_liste btn text-primary" href=""><h4  >Voir la liste des membres</h4></a>
                    </div> 
                   
                </div>
            </div>
        </div>
        <div class="col-0"></div>
    </div>
     
@endsection
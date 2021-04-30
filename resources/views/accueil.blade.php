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
            <div class="container">
                <div class="row">
                    <div class="bloc_droite">
                        <img class="grandlivre" src="Images/grandlivre.jpg" width="" heigth="" alt="">
                    </div>
                </div>   
            </div>
        </div>
        <div class="col-0"></div>
    </div>
@endsection
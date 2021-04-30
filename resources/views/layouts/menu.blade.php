<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/accueil.css')}} ">
    <link rel="stylesheet"  href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet"  href="{{asset('css/ajoulivre.css')}}">
    <link rel="stylesheet"  href="{{asset('css/inscription.css')}}">
    <link href="{{asset('icofont/icofont.min.css')}}" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light fond_entete nav_centre">
            <div class="container">
                <div class="row">
                    <div class="">
                        <a class="font-weight-bold text-white" href="{{route('dashboard')}}"> <span class="top">LeSAVAN</span> </a>
                    </div>
                    <a class="navbar-brand" href="{{route('dashboard')}}">
                        <div class="d-flex">
                            <h6> 
                                <img src="images/Home_26px.png" weight="50px" height="30px" class="droite" alt="">
                                <a class="btn btn-light font-weight-bold  " href="{{route('dashboard')}}">Accueil</a>
                            </h6>
                        </div>
                    </a>
                    <div class=" ml-5">
                        <a href="{{route('register')}}"><button class="btn btn-light font-weight-bold deconnexion " type="submit"> <span class="text-primary"><i class="fa icofont-plus"></i> </span> Membre</button></a> 
                   </div>
                    <div class=" ml-5">
                         <a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                          <button class="btn btn-light font-weight-bold deconnexion " type="submit"><span class="text-primary"><i class="fa icofont-exit"></i> </span> Déconnexion</button>
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- corps-->
    <div class="container-fluid">
        @yield('contenu')
    </div>
   <footer> <!-- footer-->
        <div class="container-fluid p-0">
            <div class="navbar navbar-expand-lg navbar-light fond_footer footer">
                <img src="{{asset('Images/Copyright_26px.png')}}" weight="12px" height="12px"  class="copyright">
                <div class="font-weight-bold text-white">Rafihatou 2021</div>
            </div>
        </div>
   </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/connexion.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Connexion</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class=" wordart slate"> <span class="word"> Bienvenue à la bibliothèque Le SAVAN
                </span></div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <div>
        <h4 class="ddeConnexion">Veuillez-vous connecter svp!</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="wrapper fadeInDown">
                <div id="formContent"> 
                    <h2 class="active debut"> Connexion</h2> 
                    <div class="fadeIn first">
                    </div>
                    <form action="{{route('login')}}" method="post">
                    @csrf
                    <input type="email" id="login" required class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <input type="password" required id="password" class="fadeIn third @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input font-weight-bold" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label font-weight-bold text-primary" for="remember">
                                        {{ __('Se souvenir de moi!') }}
                            </label>
                        </div>
                    </div>
                    <input type="submit" class=" fadeIn fourth" value="Se connecter">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-5">
                <div class="font-weight-bold text-center text-info">Rafihatou@2021</div>
   </footer>
</body>
</html>
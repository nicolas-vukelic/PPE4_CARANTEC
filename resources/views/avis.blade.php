<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire d'avis</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>

<!--NAV-->
<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
    <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="nav">

        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-dark text-uppercase px-3" href="/accueil">Accueil</a></li>
            <li class="nav-item"><a class="nav-link text-dark text-uppercase px-3" href="/programme">Programme</a></li>
            <li class="nav-item"><a class="nav-link text-dark text-uppercase px-3" href="/reservation">Réservation</a></li>
            <li class="nav-item"><a class="nav-link text-dark text-uppercase px-3" href="/actualite">Actualité</a></li>
            <li class="nav-item"><a class="nav-link text-dark text-uppercase px-3" href="/liste_avis">Avis</a></li>


        </ul>
    </div>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif
</nav>
<!--END OF NAV-->

</br>
</br>
</br>
</br>
</br>

<div class="container mt-5">

    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <form action="{{ route('avis') }}" method="post" >

        @csrf

        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control {{ $errors->has('nom') ? 'error' : '' }}" name="nom" id="nom">

            <!-- Error -->
            @if ($errors->has('nom'))
                <div class="error">
                    {{ $errors->first('nom') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Prenom</label>
            <input type="text" class="form-control {{ $errors->has('prenom') ? 'error' : '' }}" name="prenom"
                   id="prenom">

            @if ($errors->has('prenom'))
                <div class="error">
                    {{ $errors->first('prenom') }}
                </div>
            @endif
        </div>


        <div class="form-group">
            <label>Note</label>
            <input type="number" class="form-control {{ $errors->has('note') ? 'error' : '' }}" name="note"
                   id="note" min="0" max="10">

            @if ($errors->has('prenom'))
                <div class="error">
                    {{ $errors->first('prenom') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Votre avis</label>
            <textarea class="form-control {{ $errors->has('avis') ? 'error' : '' }}" name="avis"
                   id="avis"></textarea>

            @if ($errors->has('avis'))
                <div class="error">
                    {{ $errors->first('avis') }}
                </div>
            @endif
        </div>






        <input type="submit" name="Envoyer" value="Envoyer" class="btn btn-dark btn-block">
    </form>
</div>
</body>

</html>

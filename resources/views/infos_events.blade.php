<!doctype html>
<html lang="fr-FR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <!--<script src="/js/app.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/44f6a3dd35.js" crossorigin="anonymous"></script>

    <title> Teknival Breton </title>
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


<!--BANNER-->




<section>
    <div class="container-fluid">
        <div class="row bg-light justify-content-center align-items-center" style="height:100vh">
            <div class="col-sm-10 text-center">
                <img class="fit-picture mb-5" src="images/banniere3.jpg" alt="banniere">
                <!-- <h1 class="display-2 text-light">Lancez vous dans l'aventure, venez découvrir et vous éclater au Tecknival
                     Breton</h1>-->

            </div>

        </div>
    </div>
</section>


<!--ENF OF BANNER-->


@foreach($infos_events as $info)
<div class="card" style="width: 50rem; margin-left: 35rem; margin-top: 1rem;">

    <div class="card-body">
        <h5 class="card-title"><b>Nom de l'évenement :</b> {{$info->NOM}}</h5>
        <p class="card-text">{{$info->RESUME}}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Date: </b>{{$info->DATE}}</li>
        <li class="list-group-item"><b>Heure:</b> {{$info->HEUREDEBUT}}</li>
        <li class="list-group-item"><b>Lieu :</b> {{$info->NOM}}</li>
        <li class="list-group-item"><b>Nombre de personnes max :</b> {{$info->JAUGE}} </li>
        <li class="list-group-item"><b>Prix de la place :</b> {{$info->TARIF}}€ </li>
    </ul>


    <div class="card-body">
        <form action="/reservation" method="post">
            @csrf
            <input type="hidden" name="IDEVENT" value="{{$info->IDEVENT}}">
            <input type="hidden" name="IDPER" value="{{Auth::user()->id}}">
        <label for="NBPLACES"><b>Combien de places voulez vous réserver ? (maximum 10)</b></label>
        <input type="number" class="form-control" name="NBPLACES" id="NBPLACES" min="1" max="10"></br>
        <button class="card-link" type="submit"> <b>Réserver ma place</b> </button>
        </form>
        </br>
        <a href="/programme" class="card-link"><b>Retour au programme</b></a>

    </div>

</div>
@endforeach


</br>
</br>
</br>
</br>
</br>
</br>

</body>
</html>

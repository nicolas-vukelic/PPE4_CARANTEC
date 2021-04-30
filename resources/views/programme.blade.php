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
    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/44f6a3dd35.js" crossorigin="anonymous"></script>

    <title> Teknival Breton </title>
</head>

<body id="body">

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

</br>
</br>
</br>
</br>

<h1 class="text-center" style="color:#FF0000"><b>Veuillez vous connecter afin d'avoir accès aux informations et pouvoir réserver votre place !</b> </h1>
</br>
<div class=" card-content">
    <div class="content">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom événement</th>

            </tr>
            </thead>
            <tbody>
            @foreach($liste_events as $event)
                <tr>
                    <td>{{$event->IDEVENT}}</td>
                    <td><strong>{{$event->NOM}}</strong></td>
                    <td><a class="button btn-secondary" href="{{url('infos_events/'.$event->IDEVENT)}}">Voir les infos</a></td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

<a id="ttt" href="#body" class="hide">
    <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn.onlinewebfonts.com%2Fsvg%2Fdownload_70374.png&f=1&nofb=1" width="70" height="70"/>
</a>

</body>
</html>

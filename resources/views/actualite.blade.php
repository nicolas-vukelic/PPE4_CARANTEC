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
            <div class=" text-center">
                <img class="fit-picture" src="images/banniere7.jpg" alt="banniere">
                <!-- <h1 class="display-2 text-light">Lancez vous dans l'aventure, venez découvrir et vous éclater au Tecknival
                     Breton</h1>-->

            </div>

        </div>
    </div>
</section>


<!--ENF OF BANNER-->


<main>
    <section class="d-flex flex-wrap justify-content-center">
        <article class="row text-center m-5">

            <h1 class="text-secondary">Infos Covid-19 /2021</h1>
            <p class="text-muted"> VOTRE FESTIVAL TEKNIVAL BRETON AURA BIEN LIEU CETTE ANNÉE  !! </br></p>
            <a href="/article1" class="btn btn-outline-secondary">EN SAVOIR PLUS</a>
        </article>
        <article class="row text-center m-5">

            <h1 class="text-secondary">Retrouvez désormais tout notre programme pour la session 2021 !</h1>
            <p class="text-muted">Vous aimez nos concepts, nos concerts et toute autres manifestations que nous organisons ? </br>
                Alors n'hésitez pas une seule seconde ! Venez regarder ce qu'il vous attend en 2021. </br></br>
                <b>ATTENTION les places sont limitées</b></br>
                <b>Dépéchez vous !</b></br></br>
            Sous réserve des décisions gouvenementales ...</p>
            <a href="/article2" class="btn btn-outline-secondary">EN SAVOIR PLUS</a>
        </article>

        <article class="row text-center m-5">
            <!-- <img class="fit-picture" src="#" alt="image recap">-->

            <h1 class="text-secondary">Infos Covid-19 /2020</h1>
            <p class="text-muted">Nous avons le regret de vous informer que la session 2020 est annulée suite à la pandémie.</br></p>
            <a href="/article3" class="btn btn-outline-secondary">EN SAVOIR PLUS</a>
        </article>

        <article class="row text-center m-5">
            <!--<img class="fit-picture" src="#" alt="image recap">-->

            <h1 class="text-secondary">Votre programme pour la session 2020 est enfin disponible !</h1>
            <p class="text-muted">Retrouvez désormais tout vos artistes préférés ! </br>
            La session 2020 arrive à grand pas ! </br>
                <b>Nous sommes prêt à vous accueillir !</b></p>
            <a href="/article4" class="btn btn-outline-secondary">EN SAVOIR PLUS</a>
        </article>
    </section>

    </br>
    </br>
    </br>



</main>
<a id="ttt" href="#body" class="hide">
    <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn.onlinewebfonts.com%2Fsvg%2Fdownload_70374.png&f=1&nofb=1" width="70" height="70"/>
</a>
</body>
</html>









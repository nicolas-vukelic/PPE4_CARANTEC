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
    <section class="d-flex flex-wrap justify-content-center mt-5">
        <article class="row text-center col-lg-4 m-2 text-center mt-5">
            <i class="fas fa-calendar-alt fa-5x"></i>
            <h1 class="text-secondary">Programme</h1>
            <p class="text-muted">Consultez le programme de votre festival préféré ! </br>
            Vous y retrouverez toutes les informations nécessaire concernant chaque manifestions !
            N'hésitez plus, et venez nous rejoindre !</p>
            <a href="/programme" class="btn btn-outline-secondary">EN SAVOIR PLUS</a>
        </article>
        <article class="row text-center col-lg-4 m-2 text-center mt-5">
            <i class="fas fa-calendar-check fa-5x"></i>
            <h1 class="text-secondary">Réservation</h1>
            <p class="text-muted">Vous aimez nos concepts, nos concerts et toute autres manifestations que nous organisons ? </br>
            Alors n'hésitez pas une seule seconde ! Venez reserver votre place parmis nous. </br>
            <b>ATTENTION les places sont limitées</b></br>
            <b>Dépéchez vous !</b></p>
            <a href="/reservation" class="btn btn-outline-secondary">EN SAVOIR PLUS</a>
        </article>

        <article class="row text-center col-lg-4 m-2 text-center mt-5">
           <!-- <img class="fit-picture" src="#" alt="image recap">-->
            <img  height="80px" width="80px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDM5NS41NjkgMzk1LjU2OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzk1LjU2OSAzOTUuNTY5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBkPSJNMzY1LjExLDgxLjEyNGMtMi4zLTI5Ljc5NC0yNy4yNjEtNTMuMzM5LTU3LjYzNS01My4zMzlINTcuODI2QzI1Ljk0MSwyNy43ODUsMCw1My43MjYsMCw4NS42MXYyMjQuMzUNCgkJYzAsMzEuODg0LDI1Ljk0MSw1Ny44MjUsNTcuODI2LDU3LjgyNWgyNzkuOTE4YzMxLjg4NSwwLDU3LjgyNi0yNS45NDEsNTcuODI2LTU3LjgyNVYxMzIuMDMNCgkJQzM5NS41NjksMTEwLjA0MywzODMuMjI1LDkwLjg5OSwzNjUuMTEsODEuMTI0eiBNMzMzLjk5LDMwOS45NmMwLDE0LjYxOS0xMS44OTQsMjYuNTE0LTI2LjUxNCwyNi41MTRINTcuODI2DQoJCWMtMTQuNjIsMC0yNi41MTQtMTEuODk1LTI2LjUxNC0yNi41MTRWODUuNjFjMC0xNC42MTksMTEuODk0LTI2LjUxNCwyNi41MTQtMjYuNTE0aDI0OS42NWMxNC42MiwwLDI2LjUxNCwxMS44OTUsMjYuNTE0LDI2LjUxNA0KCQlWMzA5Ljk2eiIvPg0KCTxwYXRoIGQ9Ik02Mi45MDEsMTQ1LjEzOGgwLjY1MmM0LjUwNSwwLDguMTU2LTMuNjUxLDguMTU2LTguMTU3di0yOC43NTZsMjQuMzU4LDMzLjU0OGMxLjUzNiwyLjExMywzLjk4OCwzLjM2NSw2LjYwMSwzLjM2NWgwLjc5MQ0KCQljMC4wMywwLDAuMDYtMC4wMDYsMC4wODgtMC4wMDZjMC4wNDEsMCwwLjA4MSwwLjAwNiwwLjEyMywwLjAwNmgwLjY1MmM0LjUwNCwwLDguMTU2LTMuNjUxLDguMTU2LTguMTU3VjgzLjM5OQ0KCQljMC00LjUwNS0zLjY1Mi04LjE1Ny04LjE1Ni04LjE1N2gtMC42NTJjLTQuNTA2LDAtOC4xNTcsMy42NTItOC4xNTcsOC4xNTd2MjguNzU1TDcxLjE1Niw3OC42MDYNCgkJYy0xLjUzNS0yLjExMy0zLjk4OS0zLjM2NC02LjYtMy4zNjRoLTAuNzkyYy0wLjAzLDAtMC4wNTgsMC4wMDYtMC4wODgsMC4wMDZjLTAuMDQyLDAtMC4wODItMC4wMDYtMC4xMjMtMC4wMDZoLTAuNjUyDQoJCWMtNC41MDUsMC04LjE1NiwzLjY1Mi04LjE1Niw4LjE1N3Y1My41ODJDNTQuNzQ1LDE0MS40ODcsNTguMzk1LDE0NS4xMzgsNjIuOTAxLDE0NS4xMzh6Ii8+DQoJPHBhdGggZD0iTTE2Mi40MTksMTI4LjgyNGgtMjUuNDQxdi0xMC45NzFoMjAuNzY0YzQuNTA0LDAsOC4xNTYtMy42NTEsOC4xNTYtOC4xNTV2LTAuNjUzYzAtNC41MDYtMy42NTItOC4xNTctOC4xNTYtOC4xNTdoLTIwLjc2NA0KCQl2LTguNjgxaDI0LjM0OWM0LjUwNSwwLDguMTU3LTMuNjUxLDguMTU3LTguMTU2di0wLjY1MmMwLTQuNTA1LTMuNjUxLTguMTU3LTguMTU3LTguMTU3aC0zMy4xNThjLTQuNTA1LDAtOC4xNTcsMy42NTItOC4xNTcsOC4xNTcNCgkJdjUzLjU4MmMwLDQuNTA2LDMuNjUyLDguMTU3LDguMTU3LDguMTU3aDM0LjI1MWM0LjUwNCwwLDguMTU3LTMuNjUxLDguMTU3LTguMTU3QzE3MC41NzYsMTMyLjQ3NywxNjYuOTI0LDEyOC44MjQsMTYyLjQxOSwxMjguODI0DQoJCXoiLz4NCgk8cGF0aCBkPSJNMTk4Ljk1OCwxNDUuMTM4aDAuNTAxYzAuMDExLDAsMC4wMjEtMC4wMDIsMC4wMzItMC4wMDJjMC4wMSwwLDAuMDIsMC4wMDIsMC4wMzIsMC4wMDJoMC40MjENCgkJYzMuNTAyLDAsNi42MTItMi4yMzUsNy43MzEtNS41NTNsMTAuMTk2LTMwLjI3NGwxMC4xNDgsMzAuMjY1YzEuMTE0LDMuMzI0LDQuMjI3LDUuNTYzLDcuNzMzLDUuNTYzaDAuNTAxDQoJCWMwLjAxMSwwLDAuMDItMC4wMDIsMC4wMzItMC4wMDJzMC4wMjIsMC4wMDIsMC4wMzMsMC4wMDJoMC40MjFjMy40OTUsMCw2LjYwMi0yLjIyNyw3LjcyNC01LjUzN2wxOC4xNjgtNTMuNTgzDQoJCWMwLjg0NS0yLjQ4OSwwLjQzNy01LjIzNS0xLjA5NS03LjM3MWMtMS41MzEtMi4xMzctNC0zLjQwNS02LjYyOC0zLjQwNWgtMC44MzVjLTMuNTE2LDAtNi42MzYsMi4yNTMtNy43NDIsNS41OUwyMzYuMjY4LDExMS4yDQoJCWwtMTAuMTEtMzAuMzc2Yy0xLjEwOS0zLjMzMy00LjIyNy01LjU4MS03LjczOS01LjU4MWgtMS4xNGMtMy41MTcsMC02LjYzNiwyLjI1My03Ljc0Miw1LjU5TDE5OS40NzQsMTExLjJsLTEwLjEwOS0zMC4zNzYNCgkJYy0xLjEwOS0zLjMzMy00LjIyNy01LjU4MS03Ljc0LTUuNTgxaC0wLjgzNGMtMi42MjksMC01LjA5NywxLjI2OC02LjYzLDMuNDA1Yy0xLjUzMiwyLjEzNi0xLjk0LDQuODgyLTEuMDk1LDcuMzcxbDE4LjE2OCw1My41ODMNCgkJQzE5Mi4zNTUsMTQyLjkxMSwxOTUuNDYyLDE0NS4xMzgsMTk4Ljk1OCwxNDUuMTM4eiIvPg0KCTxwYXRoIGQ9Ik0yODkuNDk2LDE0NS4xMzhjMTguMDg0LDAsMjYuMTc4LTEwLjUyNSwyNi4xNzctMjAuODkzYzAuMTI1LTE2LjE3Ni0xMy45NTUtMjAuNDMxLTIyLjM2OC0yMi45NzMNCgkJYy05LjMzNS0yLjgyMi0xMC4yMTUtMy45NTUtMTAuMjE1LTYuMjQ0YzAtMS4zNjIsMy4yNjQtMi44Miw4LjEyLTIuODJjMy4yNSwwLDcuMDk5LDAuOTU0LDkuMzYsMi4zMTgNCgkJYzMuODE2LDIuMzA2LDguNzczLDEuMTIsMTEuMTM1LTIuNjYxbDAuMjk5LTAuNDc5YzEuMTU1LTEuODQ4LDEuNTIxLTQuMDgyLDEuMDE4LTYuMjAyYy0wLjUwMS0yLjEyMS0xLjgzMi0zLjk1Mi0zLjY5My01LjA4NQ0KCQljLTQuOTkyLTMuMDQxLTExLjc2NS00Ljg1Ny0xOC4xMTktNC44NTdjLTE3LjMzLDAtMjUuMDg3LDkuOTM3LTI1LjA4NywxOS43ODZjMCwxNS43NSwxMy4zMzIsMTkuNzg4LDIyLjE1MywyMi40NTkNCgkJYzkuNjA1LDIuOTA5LDEwLjQ1Myw0LjA2NSwxMC40MzIsNi42OTljMCwyLjczOS00Ljc3NiwzLjk4Ni05LjIxMiwzLjk4NmMtNC4zMSwwLTkuMDM4LTEuODQtMTEuNzY2LTQuNTc5DQoJCWMtMS41MjktMS41MzYtMy42MDUtMi4zOTktNS43Ny0yLjQwMmMtMC4wMDMsMC0wLjAwNSwwLTAuMDA4LDBjLTIuMTYyLDAtNC4yMzksMC44Ni01Ljc2OCwyLjM5bC0wLjQ0NSwwLjQ0Ng0KCQljLTEuNTQzLDEuNTQzLTIuNDA0LDMuNjQtMi4zODksNS44MjJjMC4wMTUsMi4xODMsMC45MDQsNC4yNjksMi40NjcsNS43OTFDMjcxLjgzOCwxNDEuNDk5LDI4MC45MTEsMTQ1LjEzOCwyODkuNDk2LDE0NS4xMzh6Ii8+DQoJPHBhdGggZD0iTTE0Ny4zMzgsMTY4LjkwOUg2OS43NTVjLTguNjQ2LDAtMTUuNjU2LDcuMDA5LTE1LjY1NiwxNS42NTZjMCw4LjY0Niw3LjAwOSwxNS42NTYsMTUuNjU2LDE1LjY1Nmg3Ny41ODINCgkJYzguNjQ2LDAsMTUuNjU2LTcuMDEsMTUuNjU2LTE1LjY1NkMxNjIuOTk0LDE3NS45MTgsMTU1Ljk4NCwxNjguOTA5LDE0Ny4zMzgsMTY4LjkwOXoiLz4NCgk8cGF0aCBkPSJNMTQ3LjMzOCwyMjEuMDk0SDY5Ljc1NWMtOC42NDYsMC0xNS42NTYsNy4wMS0xNS42NTYsMTUuNjU2YzAsOC42NDYsNy4wMDksMTUuNjU2LDE1LjY1NiwxNS42NTZoNzcuNTgyDQoJCWM4LjY0NiwwLDE1LjY1Ni03LjAwOSwxNS42NTYtMTUuNjU2QzE2Mi45OTQsMjI4LjEwNCwxNTUuOTg0LDIyMS4wOTQsMTQ3LjMzOCwyMjEuMDk0eiIvPg0KCTxwYXRoIGQ9Ik0xNDcuMzM4LDI3My4yODFINjkuNzU1Yy04LjY0NiwwLTE1LjY1Niw3LjAwOS0xNS42NTYsMTUuNjU2YzAsOC42NDYsNy4wMDksMTUuNjU2LDE1LjY1NiwxNS42NTZoNzcuNTgyDQoJCWM4LjY0NiwwLDE1LjY1Ni03LjAxLDE1LjY1Ni0xNS42NTZDMTYyLjk5NCwyODAuMjksMTU1Ljk4NCwyNzMuMjgxLDE0Ny4zMzgsMjczLjI4MXoiLz4NCgk8cGF0aCBkPSJNMzA2LjYxLDE2Ni42OThIMTg2Ljk2N2MtNS4wMDUsMC05LjA2NCw0LjA1OS05LjA2NCw5LjA2M1YyOTcuNzRjMCw1LjAwNSw0LjA1OSw5LjA2Myw5LjA2NCw5LjA2M0gzMDYuNjENCgkJYzUuMDA2LDAsOS4wNjQtNC4wNTksOS4wNjQtOS4wNjNWMTc1Ljc2MUMzMTUuNjc0LDE3MC43NTYsMzExLjYxNiwxNjYuNjk4LDMwNi42MSwxNjYuNjk4eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo="/>
            <h1 class="text-secondary">Actualité</h1>
            <p class="text-muted">Restez à l'affut de toute l'actualité du Teknival Breton ! </br>
            En cette année particulière les dates risque d'être modifiées. </br>
            Pour en savoir plus, consultez notre rubrique Actualité</b></p>
            <a href="/actualite" class="btn btn-outline-secondary">EN SAVOIR PLUS</a>
        </article>

        <article class="row text-center col-lg-4 m-2 text-center">
            <!--<img class="fit-picture" src="#" alt="image recap">-->
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiPjxnIGlkPSJSZXZpZXciPjxwYXRoIGQ9Ik00OTYsNDhIMjAwYTgsOCwwLDAsMC04LDh2ODBIMTZhOCw4LDAsMCwwLTgsOFYzODRhOCw4LDAsMCwwLDgsOEg3MnY2NGE4LDgsMCwwLDAsMTMuNjU3LDUuNjU3TDE1NS4zMTMsMzkySDM3NmE4LDgsMCwwLDAsOC04VjI0OGgyMC42ODdsNTMuNjU2LDUzLjY1N0E4LDgsMCwwLDAsNDcyLDI5NlYyNDhoMjRhOCw4LDAsMCwwLDgtOFY1NkE4LDgsMCwwLDAsNDk2LDQ4Wk0zNjgsMzc2SDE1MmE4LDgsMCwwLDAtNS42NTcsMi4zNDNMODgsNDM2LjY4NlYzODRhOCw4LDAsMCwwLTgtOEgyNFYxNTJIMzY4Wk00ODgsMjMySDQ2NGE4LDgsMCwwLDAtOCw4djM2LjY4N2wtNDIuMzQzLTQyLjM0NEE4LDgsMCwwLDAsNDA4LDIzMkgzODRWMTQ0YTgsOCwwLDAsMC04LThIMjA4VjY0SDQ4OFoiLz48cGF0aCBkPSJNMjAwLDM2MGE5Niw5NiwwLDEsMC05Ni05NkE5Ni4xMDgsOTYuMTA4LDAsMCwwLDIwMCwzNjBabTAtMTc2YTgwLDgwLDAsMSwxLTgwLDgwQTgwLjA5MSw4MC4wOTEsMCwwLDEsMjAwLDE4NFoiLz48cGF0aCBkPSJNMzY4LDg4aDcyYTgsOCwwLDAsMCwwLTE2SDM2OGE4LDgsMCwwLDAsMCwxNloiLz48cGF0aCBkPSJNNDY0LDg4aDhhOCw4LDAsMCwwLDAtMTZoLThhOCw4LDAsMCwwLDAsMTZaIi8+PHBhdGggZD0iTTE1My43NTMsMjgzQTgsOCwwLDAsMCwxNTUsMjk0LjI0N2MxNC43MiwxMS43NzUsMjkuODU4LDE3LjY2Myw0NSwxNy42NjNzMzAuMjc4LTUuODg4LDQ1LTE3LjY2M2E4LDgsMCwwLDAtMTAtMTIuNDk0Yy0yMy44NzksMTkuMS00Ni4xMjUsMTkuMS03MCwwQTgsOCwwLDAsMCwxNTMuNzUzLDI4M1oiLz48cGF0aCBkPSJNMTU3LjY1NiwyNDUuNjU3YzcuNTQxLTcuNTQsMTMuMTQ3LTcuNTQsMjAuNjg4LDBhOCw4LDAsMSwwLDExLjMxMi0xMS4zMTRjLTEzLjc2MS0xMy43NjItMjkuNTUxLTEzLjc2Mi00My4zMTIsMGE4LDgsMCwxLDAsMTEuMzEyLDExLjMxNFoiLz48cGF0aCBkPSJNMjIxLjY1NiwyNDUuNjU3YzcuNTQxLTcuNTQsMTMuMTQ3LTcuNTQsMjAuNjg4LDBhOCw4LDAsMSwwLDExLjMxMi0xMS4zMTRjLTEzLjc2MS0xMy43NjItMjkuNTUxLTEzLjc2Mi00My4zMTIsMGE4LDgsMCwxLDAsMTEuMzEyLDExLjMxNFoiLz48L2c+PC9zdmc+Cg==" height="100px"/>
            <h1 class="text-secondary">Avis</h1>
            <p class="text-muted">Vous avez aimé venir au Teknival Breton ?</br>
            N'hésitez pas à nous faire part de votre retour !</br>
            Nous serions ravis d'y porter attention.</p>
            <a href="/liste_avis" class="btn btn-outline-secondary">EN SAVOIR PLUS</a>
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









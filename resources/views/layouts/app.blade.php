<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/c8e43d811e.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('css/animation/animate.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <!-- different link and script on page generate -->
    @yield('link')

</head>

<body>
<div id="app">

    <header>
        <div class="container-logo">
            <a href="{{ route('home') }}"><img class="animated fadeIn 3s logo" src="{{ asset('images/LogoDesign_QUADRI.png') }}" alt="Logo entreprise"></a>
        </div>

        <nav class=" navbar navbar-expand-lg navbar-dark default-color clear">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-navi mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produits
                        </a>
                        <div class="dropdown-menu dropdown-default animated flipInY" aria-labelledby="navbarDropdownMenuLink-333">
{{--                                                        <a class="dropdown-item" href="{{ route('veranda') }}">Veranda</a>--}}
                            <a class="dropdown-item" href="{{ route('pergola') }}">Pergola</a>
{{--                                                        <a class="dropdown-item" href="{{ route('store') }}">Store</a>--}}
                            <a class="dropdown-item" href="{{ route('terrasse') }}">Terrasse</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('formulaire') }}">Contact</a>
                    </li>
                    @if (auth()->check() === true)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('management') }}">Gestion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"><i class="far fa-times-circle"></i></a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>


    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <a href="{{ Route('home') }}"><img class="logo-footer" src="{{ asset('images/Logo Pergola_blanc.png') }}" alt="logo entreprise"></a>

        <article>
            <ul>
                <li class="footer-title">2A.AZ Design</li>
                <li>Reichstett</li>
                <li>5 rue des anemones 67116 Reichstett</li>
                <li>67116</li>
                <li>06 78 01 50 53</li>
                <li>Pergolasdesign2A.AZ@gmail.com</li>
            </ul>
        </article>

        <hr>

        <ul class="list-mention">
            <li><a href="{{ route('home') }}#societe">Société</a></li>
            <li><a href="{{ route('formulaire') }}">Contact</a></li>
            <li><a href="{{ route('mention') }}">Mentions légales</a></li>
            <li><a href="{{ route('mention') }}#politique">Politique de confidentialité</a></li>
            @if (auth()->check() === false)
                <button class="admin"><a href="{{ route('login') }}"><i class="fas fa-toolbox"></i></a></button>
            @endif
        </ul>

    </footer>

</div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

<!-- Script on the different page -->
@yield('script')


</body>

</html>

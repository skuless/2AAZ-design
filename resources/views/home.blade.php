@extends('layouts.app')

@section('title')
    2aaz-design Accueil
@endsection

@section('meta')
    <meta name=”description” content='Poseur de Vérandas, Pergolas ainsi que Terrasses, 2aaz-design à les moyens de faire de votre projet une réalité'>
@endsection

@section('link')
<!-- link Carousel -->
<link rel="stylesheet" href="{{ asset('owlCarousel/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('owlCarousel/css/owl.theme.default.min.css') }}">

<!-- Home style -->
<link rel="stylesheet" href="{{ asset('css/home/main.css') }}">

@endsection

@section('content')

<div class="triangle-picture picture-intro">
    <div class="triangle-bottom-right"></div>
    <div class="triangle-bottom-left"></div>
</div>

<section class="introduction second-grass container-content" id="societe">
    <h1>Qui Sommes <span class="ocean"> Nous ?</span></h1>
    <div class="first-grass">
        <p>Située près de Strasbourg, 2AAZ est une entreprise spécialisée dans la pose de pergolas, vérandas, stores et terrasses.</p>

        <p>Ayant travaillé plusieurs années dans les plus grandes entreprises d'Alsace, Mr.THITH, plus que motivé, a décidé d'ouvrir une entreprise qui sera à son image.</p>

        <p>2AAZ a pour seul objectif de vous satisfaire tout en vous assurant de la qualité et un travail irréprochable.</p>

        <p>Comme l'indique le nom de l'entreprise, nous vous accompagnerons de A à Z: du simple devis en passant par la pose, jusqu'au sav si besoin.</p>

        <p class="text-center">A vous de choisir dès à présent !</p>
    </div>
</section>

<section class="carousel-home introProduct container-content">
    <article>
        <h2>Que Faisons <span class="ocean">Nous ?</span></h2>

        <div class="owl-carousel owl-theme carouselHomePage">
            <div>
                <img src="{{ asset('images/libreDeDroit/pergola.jpg') }}" alt="Pergola toiture polycarbonate">
                <h3>Création</h3>
            </div>
            <div>
                <img src="{{ asset('images/libreDeDroit/store-toiture.jpg') }}" alt="Store de toiture">
                <h3>Rénovation</h3>
            </div>
            <div>
                <img src="{{ asset('images/libreDeDroit/terrasse-bois.jpg') }}" alt="Terrasse en bois">
                <h3>Entretien</h3>
            </div>
        </div>
    </article>
    <article>
        <h3>Création, Rénovation, Entretien vous dites ?</h3>

        <p>Et bien oui ! Nous vous assurons de la qualité, partant des matériaux utilisés jusqu'à la pose.</p>

        <p>Du nouveau projet jusqu'a l'ancien, rénovation ou entretien !</p>
    </article>

    <p class="construct">Le site étant toujours en construction, vous constaterez donc qu'il manque plusieurs produits que propose l'entreprise. C'est pourquoi nous vous invitons à faire une demande de contact pour toute demande concernant les produits non affichés sur le site ( vérandas, stores, châssis coupe-vent et autres)</p>

</section>


@endsection

@section('script')
<script src="{{ asset('owlCarousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('owlCarousel/js/carousel.js') }}"></script>
@endsection

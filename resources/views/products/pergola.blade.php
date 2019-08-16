@extends('layouts.app')

{{-- title of page --}}
@section('title')
    2aaz-design Pergola
@endsection

@section('meta')
    <meta name=”description” content='Pose de Pergolas en Alsace, 2A.AZ design vous propose une multitude de choix pour concrétiser votre projet'>
@endsection

{{-- link generate for this page --}}
@section('link')

<link rel="stylesheet" href="{{ asset('css/products/main.css') }}">

@endsection


@section('content')

<section>
    <article class="clear">
        <h2><strong>Pergola auto-portée</strong> </h2>

        <div>
            <img class="img-float-left" src="{{ asset('images/products/pergola-auto-portée.jpg') }}" alt="Pergola autoportée">
{{--            <small class="small-left">Chantier de Rohr</small>--}}
        </div>
        <p>Pergola auto-portée avec jambe de force pour stabiliser la structure, toiture en panneaux sandwich de 32mm.</p>

        <p>Une variété de choix s’offre à vous, isolant allant de 16mm à 32mm pouvant être en polycarbonate ou bien en verre. Le choix s’offre à vous.</p>

    </article>
<hr>
    <article class="clear">
        <h2><strong>Auvent porte d'entrée</strong></h2>

        <div>
            <img class="img-float-right" src="{{ asset('images/products/auvent-facade.jpg') }}" alt="Auvent porte d'entrée">
{{--            <small class="small-right">Chantier de Schwabwiller</small>--}}
        </div>

        <p>Auvent de porte d'entrée en bois avec plaque de 16mm en polycarbonate opale comprenant une gouttière à l’avant avec descente d’eau de 50mm.</p>

        <p>Pour ce genre de structure 16mm est amplement suffisant car il n'y a aucun besoin d’isolation, l'auvent sert seulement de couverture contre la pluie ou bien la neige.</p>

        <p>Rentrer chez soi n’aura jamais été aussi agréable.</p>
    </article>

</section>

@endsection

{{-- Script generate for this page --}}
@section('script')


@endsection

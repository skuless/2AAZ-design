@extends('layouts.app')

{{-- title of page --}}
@section('title')
    2aaz-design Terrasse
@endsection

@section('meta')
    <meta name=”description” content='Installation de Terrasses, Garde-corps en différents matériaux: bois, aluminium ou bien même inox. Le choix revient à vous'>
@endsection

{{-- link generate for this page --}}
@section('link')

    <link rel="stylesheet" href="{{ asset('css/products/main.css') }}">

@endsection


@section('content')

<section>
    <article class="clear">
        <h2><strong>Le composite</strong> </h2>

        <div>
            <img class="img-float-left" src="{{ asset('images/products/terrasse-composite.jpg') }}" alt="Echantillons de lames composite">
        </div>
        <p>La lame composite est un mélange de résine de plastiques et de fibre naturelle comme le bois, ce qui la rend plus résistante au vieillissement et aux conditions  climatiques. </p>

        <p>Simple d'utilisation mais un rendu et une finition parfaite.</p>

        <p>Elle existe en plusieurs coloris, cela sera à déterminer lors de votre commande.</p>

    </article>
    <hr>
    <article class="clear">
        <h2><strong>Le bois</strong></h2>

        <div>
            <img class="img-float-right" src="{{ asset('images/products/terrasse-garde-corps-bois.jpg') }}" alt="Terasse en bois vue du dessous">
            <small class="small-right"></small>
        </div>

        <p>Le bois est un matériau naturel et indémodable, il demande peut être plus de traitement mais il est bien plus traditionnel que le composite.</p>

        <p>La structure</p>

        <p>Plusieurs colorations en lasures ou traitements sont disponibles alors n’hésiter pas à en discuter lors de votre commande.</p>
    </article>

</section>
<hr>
<section>
    <article class="clear">
        <h2><strong>Les gardes-corps</strong> </h2>

        <div>
            <img class="img-float-left resize-height" src="{{ asset('images/products/double-garde-corps.jpg') }}" alt="Garde-corps en bois ainsi qu'un garde corp en alu">
        </div>
        <p>Le garde-corps est un élément indispensable dans la pose de terrasse en hauteur car il permet d'apporter de la sécurité mais il apporte aussi de l'esthétique à vos terrasses </p>

        <p>Il existe en plusieurs matériaux, allant du bois à l’inox, du traditionnel au moderne, faites votre choix car seul vos envies comptent pour nous.</p>

    </article>
</section>

@endsection

{{-- Script generate for this page --}}
@section('script')


@endsection

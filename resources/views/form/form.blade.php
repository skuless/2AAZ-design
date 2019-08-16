@extends('layouts.app')

@section('meta')
    <meta name=”description” content='2A.AZ-design vous propose des formulaires en ligne, facilitant la prise de contact, ou bien votre demande de devis'>
@endsection

@section('title')
    2aaz-design Formulaire
@endsection

@section('link')
<!-- Link generate in my page -->
<!-- animation -->
<link rel="stylesheet" href="{{ asset('css/animation/animate.min.css') }}">

<!-- Form style -->
<link rel="stylesheet" href="{{ asset('css/form/form.css') }}">

@endsection

@section('content')

<h1>Formulaire de contact</h1>

@if ($errors->any())
    <aside class="alert alert-danger errorMessage">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </aside>

@endif

<div class="select">
    <h2>Veuillez choisir votre formulaire</h2>
    <select name="ChoiceForm" id="ChoiceForm">
        <option value="contact" >Demande de contact</option>
        <option value="devis">Demande de devis</option>
        <option value="sav">SAV</option>
    </select>
</div>

<div id="selectForm">

</div>

@endsection


@section('script')

<script src='{{ asset("js/ajax/form.js") }}'></script>

{{-- @route == connects laravel routes to js --}}
@routes

@endsection

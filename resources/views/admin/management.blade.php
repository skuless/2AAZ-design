@extends('layouts.app')

@section('title')
Administration
@endsection

@section('link')


@endsection

@section('content')

    <h1 class="text-center m-5">Page d'administration</h1>

    <section class="m-5">

        <h2 class="m-3">Devis</h2>

        <table class="table table-hover table-responsive-sm table-responsive-lg mt-4 mb-4 text-center">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postal</th>
                <th>N° de téléphone</th>
                <th>Email</th>
                <th>Sujet</th>
                <th>Date</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="contentDevis">

            </tbody>
        </table>

    </section>

    <section class="m-5">

        <h2 class="m-3">Contact</h2>

        <table class="table table-hover table-responsive-sm table-responsive-lg mt-4 mb-4 text-center">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Ville</th>
                    <th>N° de téléphone</th>
                    <th>Sujet</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="contentContact">

            </tbody>
        </table>

    </section>

    <section class="m-5">

        <h2 class="m-3">SAV</h2>

        <table class="table table-hover table-responsive-sm table-responsive-lg mt-4 mb-4 text-center">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Sujet</th>
                <th>Date</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="contentSav">

            </tbody>
        </table>

    </section>



@endsection



@section('script')

    <script src='{{ asset("js/ajax/adminManagement.js") }}'></script>

    {{-- @route == connects laravel routes to js --}}
    @routes

@endsection

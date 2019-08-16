'use strict';

//------------------------------------------------------------------------------
//--------------------------------SAV TABLE-------------------------------------
//------------------------------------------------------------------------------

//On créée une function qui va supprimer la ligne choisis selon l'id dans la base de données
function deleteRequestSav(event) {

    event.preventDefault();

    var id = $(this).val();

    // Requête ajax qui supprime la ligne selon l'id récupèré et supprime dans la base de données
    $.ajax({
        url: route('sav.destroy', {id: id}),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'DELETE',
        dataType: 'json',
    }).done(updateTableSav).fail((jq, status) => {
        console.log(jq, status);
    });

}

// Envoie de la requête pour récuprer le tableau mis à jour
function updateTableSav() {

// On supprime la partie existante puis on la recharge pour effectuer la suppresion de la ligne
    $('#contentSav').empty();

    //On envoie la requete au controlleur pour récupèrer le tableau mis à jour
    $.get(route('show.table.sav'), getUpdateSav);

}

//Affichage dans le HTML de la reponse de la requête
function getUpdateSav(data) {

    // On affiche le tableau récupèrer sur la page
    $('#contentSav').html(data);

}

//------------------------------------------------------------------------------
//--------------------------------DEVIS TABLE-----------------------------------
//------------------------------------------------------------------------------

function deleteRequestDevis(event) {

    event.preventDefault();

    var id = $(this).val();

    $.ajax({
        url: route('devis.destroy', {id: id}),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'DELETE',
        dataType: 'json',
    }).done(updateTableDevis).fail((jq, status) => {
        console.log(jq, status);
    });

}

function updateTableDevis() {

    $('#contentDevis').empty();

    $.get(route('show.table.devis'), getUpdateDevis);

}
function getUpdateDevis(data) {

    $('#contentDevis').html(data);
}

//------------------------------------------------------------------------------
//--------------------------------CONTACT TABLE---------------------------------
//------------------------------------------------------------------------------

function deleteRequestContact(event) {

    event.preventDefault();

    var id = $(this).val();

    // Requête ajax qui supprime la ligne selon l'id récupèré et supprime dans la base de données
    $.ajax({
        url: route('contact.destroy', {id: id}),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'DELETE',
        dataType: 'json'
    }).done(updateTableContact).fail((jq, status) => {
        console.log(jq, status);
    });

}

// Envoie de la requête pour récuprer le tableau mis à jour
function updateTableContact() {
    // On supprime la partie existante puis on la recharge pour effectuer la suppresion de la ligne
    $('#contentContact').empty();
    
    //On envoie la requete au controlleur pour récupèrer le tableau mis à jour
    $.get(route('show.table.contact'), getUpdateContact);
    
}

//Affichage dans le HTML de la reponse de la requête
function getUpdateContact(data) {

    // On affiche le tableau récupèrer sur la page
    $('#contentContact').html(data);

}

//------------------------------------------------------------------------------
//--------------------------------Update all table------------------------------
//------------------------------------------------------------------------------


//Au chargement de la page génération des tableaux en ajax
function updateAllTable(){

    updateTableDevis();
    updateTableContact();
    updateTableSav();

}

$(function () {

    // Affichage de tout les tableaux
    updateAllTable();

    // On affecte les événement au document directement suite à un problème
    // Les événements n'existait pas après chargement de la page du à l'ajax
    $(document).on('click', '#deleteDevis' ,deleteRequestDevis);
    $(document).on('click', '#deleteContact' ,deleteRequestContact);
    $(document).on('click', '#deleteSav' ,deleteRequestSav);
});

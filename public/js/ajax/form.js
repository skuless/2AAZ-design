'use strict';

function sendAjaxRequest(event) {

    event.preventDefault();

    // valueSelect form selected
    var valueSelect = $(this).val();

    // depending on the value returns a different form view
    switch (valueSelect) {
        case 'contact':
            $.get(route('contact'), getAjaxResponse);
            break;
        case 'devis':
            $.get(route('devis'), getAjaxResponse);
            break;
        case 'sav':
            $.get(route('sav'), getAjaxResponse);
            break;
    }

}

function getAjaxResponse(data) {
    // show new form in the page
    $('#selectForm').html(data);
}

function timeOut(){

    // time Out with 6s of delay for launch redirectTo function
    setTimeout(redirectTo(), 60000);

}

function redirectTo() {
    window.location=route('home');
}


$(function () {

    $('#ChoiceForm').on('change', sendAjaxRequest).trigger("change");
    $('#redirectTo').on('click', timeOut).trigger('click');

});
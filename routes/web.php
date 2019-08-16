<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Home page
Route::get('/', 'HomeController@index' );
Route::get('/home', 'HomeController@index')->name('home');

// Product Page
//Route::get('/veranda', 'ProductsController@verandaView')->name('veranda');
Route::get('/pergola', 'ProductsController@pergolaView')->name('pergola');
//Route::get('/store', 'ProductsController@storeView')->name('store');
Route::get('/terrasse', 'ProductsController@terrasseView')->name('terrasse');

// Form
Route::get('/formulaire', 'FormController@index')->name('formulaire');
Route::post('/formulaire', 'FormController@validateForm')->name('formulaire.validateForm');

// mention legal
Route::get('/mention', 'HomeController@legalMentionView')->name('mention');

// Different view for ajax request on the form
Route::get('/formulaire/contact', "FormController@formContact")->name('contact');
Route::get('/formulaire/devis', "FormController@formDevis")->name('devis');
Route::get('/formulaire/sav', "FormController@formSav")->name('sav');

// Confirmation page
Route::get('/formulaire/confirmation', 'FormController@confirmation')->name('confirmation');

// Resource generate route with method (delete create) etc..
Route::resource('sav', 'Form\TableManagement\SavController');
Route::resource('devis', 'Form\TableManagement\DevisController');
Route::resource('contact', 'Form\TableManagement\ContactController');

//  Management page for the admin
Route::get('management', 'Admin\AdminController@index')->name('management');
Route::get('management/table/devis', 'Form\TableManagement\TableController@showDevisTable')->name('show.table.devis');
Route::get('management/table/contact', 'Form\TableManagement\TableController@showContactTable')->name('show.table.contact');
Route::get('management/table/sav', 'Form\TableManagement\TableController@showSavTable')->name('show.table.sav');

// login
Auth::routes([
    'register' => false,
    'reset' => false,
  ]);

Route::get('/login', 'HomeController@login')->name('login');
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('home');
 })->name('logout');


<?php

namespace App\Http\Controllers\Form\TableManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Devis;
use App\Savs;
use App\Contact;

class TableController extends Controller {

    public function index() {

    }

    public function showDevisTable() {

        $devis = Devis::all();

        return view('admin\table\devisTable', [
            'devis' => $devis
        ]);

    }

    public function showContactTable() {

        $contacts = Contact::all();

        return view('admin\table\contactTable', [
            'contacts' => $contacts
        ]);

    }

    public function showSavTable() {

        $savs = Savs::all();

        return view('admin\table\savTable', [
            'savs' => $savs,
        ]);

    }

}

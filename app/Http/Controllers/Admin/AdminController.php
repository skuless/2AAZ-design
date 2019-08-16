<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Devis;
use App\Savs;
use App\Contact;

class AdminController extends Controller {

    public function index() {
        if(auth()->check() === false)
        {
            return view('home');
        }
        else {

            $devis = Devis::all();
            $savs = Savs::all();
            $contacts = Contact::all();

            return view('admin/management', [
                'devis' => $devis,
                'savs' => $savs,
                'contacts' => $contacts
            ]);
        }
    }


}
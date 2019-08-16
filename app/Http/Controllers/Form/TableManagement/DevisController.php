<?php

namespace App\Http\Controllers\Form\TableManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Devis;

class DevisController extends Controller {

    public function destroy($id) {
        return Devis::destroy($id);
    }

}
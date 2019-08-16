<?php

namespace App\Http\Controllers\Form\TableManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Savs;

class SavController extends Controller {

    public function destroy($id) {
        return Savs::destroy($id);
    }

}

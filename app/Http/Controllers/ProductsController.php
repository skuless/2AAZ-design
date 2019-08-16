<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function verandaView()
    {
        return view('products/veranda');
    }

    public function pergolaView()
    {
        return view('products/pergola');
    }

    public function storeView()
    {
        return view('products/store');
    }

    public function terrasseView()
    { 
        return view('products/terrasse');
    }
}

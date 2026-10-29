<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetShopController extends Controller
{
    public function index()
    {
        return view('inicio');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
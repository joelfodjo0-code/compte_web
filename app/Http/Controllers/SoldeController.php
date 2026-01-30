<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoldeController extends Controller
{
    public function index()
    {
        return view('auth.solde');
    }
}

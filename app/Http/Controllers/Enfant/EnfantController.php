<?php

namespace App\Http\Controllers\Enfant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnfantController extends Controller
{

    //fonction d'affichage de la page enfant
    public function index()
    {
        return view('enfant.enfant');
    }
}

<?php

namespace App\Http\Controllers\Enfant;

use App\Http\Controllers\Controller;
use App\Models\Enfant;
use Illuminate\Http\Request;

class EnfantController extends Controller
{

    //fonction d'affichage de la page enfant
    public function index(Enfant $enfant)
    {

        //$vaccin = $enfant->vaccin()
        //dd($enfant);
        return view('enfant.enfant', ['enfant' => $enfant]);
    }
}

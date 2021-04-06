<?php

namespace App\Http\Controllers\Tuteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TuteurController extends Controller
{
    //fonction d'affichage de la page enfant
    public function index()
    {
        return view('enfant.enfant');
    }
}

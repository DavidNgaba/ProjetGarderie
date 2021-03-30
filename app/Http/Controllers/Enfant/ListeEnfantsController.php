<?php

namespace App\Http\Controllers\Enfant;

use App\Models\Enfant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListeEnfantsController extends Controller
{


    public function index()
    {
        //Extraire la liste des educatrices de la base de données
        $allEnfants = Enfant::get();

        //Retourner la liste a la vue correspondante
        return view('enfant.listeEnfants', [
            'enfants' => $allEnfants
        ]);
    }
}

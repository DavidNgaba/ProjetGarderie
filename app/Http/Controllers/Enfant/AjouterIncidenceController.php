<?php

namespace App\Http\Controllers\Enfant;

use App\Models\Enfant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Incidence;

class AjouterIncidenceController extends Controller
{
    //fonction d'affichage de registration page
    public function index(Enfant $enfant)
    {

        //Extraire la liste des incidents de la base de données
        $allIncidences = Incidence::get();

        //Retourner la liste a la vue correspondante
        return view('enfant.enfantIncidence', [
            'enfant' => $enfant,
            'incidents' => $allIncidences,
        ]);
    }

    //Apres l'entrée des identifiants, enregistrer enfant dans la base de donnee
    public function update(Request $request, Enfant $enfant)
    {

        //Valider les champs
        $this->validate($request, [
            'date_incidence' => 'required|date_format:Y-m-d',
            'heure_incidence' => 'required|date_format:H:i',
            'description_incidence' => 'required|max:1000',
        ]);

        //Creer enfant dans la base de donnees
        Incidence::firstOrCreate(
            [
                'date_incident' => $request->date_incidence,
                'heure_incident' => $request->heure_incidence,
                'description' => $request->description_incidence,
                'enfant_id' => $enfant->id,
            ]
        )->id;


        //Apres enregistrement, rediriger vers la liste des enfants
        return redirect()->route('listenfants')->with('success', 'Enfant bien modifié');
    }
}

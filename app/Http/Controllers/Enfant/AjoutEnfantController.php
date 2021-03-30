<?php

namespace App\Http\Controllers\Enfant;

use App\Models\Enfant;
use App\Models\Vaccin;
use App\Models\Educatrice;
use Illuminate\Http\Request;
use App\Http\Middleware\admin;
use App\Models\VaccinsEnfants;
use App\Http\Controllers\Controller;

class AjoutEnfantController extends Controller
{

    //fonction d'affichage de registration page
    public function index()
    {

        //Extraire la liste des vaccins de la base de données
        $allVaccins = Vaccin::get();

        //Extraire la liste des educatrices de la base de données
        $allEducatrices = Educatrice::get();

        //Retourner la liste a la vue correspondante
        return view('enfant.ajoutEnfant', [
            'vaccins' => $allVaccins,
            'educatrices' => $allEducatrices,
        ]);
    }

    //Apres l'entrée des identifiants, enregistrer enfant dans la base de donnee
    public function check(Request $request)
    {

        //Valider les champs
        $this->validate($request, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'sexe' => 'required|in:homme,femme',
            'date_naissance' => 'required|date_format:Y-m-d',
        ]);

        //Creer enfant dans la base de donnees
        $eid = Enfant::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'sexe' => $request->sexe,
            'date_naissance' => $request->date_naissance,
            'educatrice_id' => $request->educatrices,
        ])->id;


        //Ajouter les vaccins de l'enfant a partir des vaccins deja existants dans la base de données
        if (!empty($request->input('vaccins'))) {

            $vaccins = $request->input('vaccins');

            foreach ($vaccins as $vaccin) {
                $vid = Vaccin::firstOrCreate([
                    'description' => $vaccin,
                ])->id;
            }

            VaccinsEnfants::create([
                'enfant_id' => $eid,
                'vaccin_id' => $vid,
            ]);
        }

        //Enregistrer un vaccin de l'enfant inexistant dans la base de donnée et lui assignée
        if (!empty($request->input('vaccin'))) {
            $vid = Vaccin::firstOrCreate([
                'description' => $request->vaccin,
            ])->id;

            VaccinsEnfants::create([
                'enfant_id' => $eid,
                'vaccin_id' => $vid,
            ]);
        }


        //Apres enregistrement, rediriger vers la liste des enfants
        return redirect()->route('listenfants');
    }
}

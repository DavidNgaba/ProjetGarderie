<?php

namespace App\Http\Controllers\Educatrice;

use App\Models\Educatrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EducatriceFormations;
use App\Models\EducatriceSpecialisations;

class ModifierEducatriceController extends Controller
{
    //fonction d'affichage de registration page
    public function index(Educatrice $educatrice)
    {
        //Extraire la liste des educatrices de la base de données
        $allEducatrices = Educatrice::get();

        //Retourner la liste a la vue correspondante
        return view('educatrice.modifierEducatrice', [
            'educatrice' => $educatrice,
        ]);
    }

    //Apres l'entrée des identifiants, enregistrer enfant dans la base de donnee
    public function update(Request $request, Educatrice $educatrice)
    {

        //Valider les champs
        $this->validate($request, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'sexe' => 'required|in:homme,femme',
            'date_naissance' => 'required|date_format:Y-m-d',
            'date_embauche' => 'required|date_format:Y-m-d',
        ]);

        //Creer enfant dans la base de donnees
        $educatrice_id = Educatrice::updateOrCreate(
            ['id' => $educatrice->id],
            [
                'name' => $request->name,
                'lastname' => $request->lastname,
                'sexe' => $request->sexe,
                'date_naissance' => $request->date_naissance,
                'date_embauche' => $request->date_embauche,

            ]
        )->id;

        //Modifier formation educatrice dans la base de donnees
        if (!empty($request->input('formation'))) {
            EducatriceFormations::updateOrCreate([
                'educatrice_id' => $educatrice_id,
                'description' => $request->formation
            ]);
        }

        //Modifier specialisation educatrice dans la base de donnees
        if (!empty($request->input('specialisation'))) {
            EducatriceSpecialisations::updateOrCreate([
                'educatrice_id' => $educatrice_id,
                'description' => $request->specialisation
            ]);
        }

        //Apres enregistrement, rediriger vers la liste des enfants
        return redirect()->route('listeducatrices')->with('success', 'Educatrice bien modifié');
    }
}

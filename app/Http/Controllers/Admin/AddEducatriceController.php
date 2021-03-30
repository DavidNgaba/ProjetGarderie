<?php

namespace App\Http\Controllers\Admin;

use App\Models\Educatrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EducatriceFormations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\EducatriceSpecialisations;

class AddEducatriceController extends Controller
{

    //Cette fonction empeche quiconque n'etant pas admin d'ajouter une educatrice
    public function __construct()
    {
        $this->middleware(['admin']);
    }

    //fonction d'affichage de registration page
    public function index()
    {
        return view('admin.registerEducatrice');
    }

    //Apres l'entrée des identifiants, enregistrer educatrice dans la base de donnee
    public function check(Request $request)
    {

        //Valider les champs
        $this->validate($request, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'sexe' => 'required|in:homme,femme',
            'date_naissance' => 'required|date_format:Y-m-d',
            'date_embauche' => 'required|date_format:Y-m-d',
            'password' => 'required|confirmed',
            'formation' => 'required',
            'specialisation' => 'required'
        ]);

        //Creer educatrice dans la base de donnees
        $educatrice_id = Educatrice::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'sexe' => $request->sexe,
            'date_naissance' => $request->date_naissance,
            'date_embauche' => $request->date_embauche,
            'password' => Hash::make($request->password),
        ])->id;

        //Enregistrer formation educatrice dans la base de donnees
        EducatriceFormations::create([
            'educatrice_id' => $educatrice_id,
            'description' => $request->formation
        ]);

        //Enregistrer specialisation educatrice dans la base de donnees
        EducatriceSpecialisations::create([
            'educatrice_id' => $educatrice_id,
            'description' => $request->specialisation
        ]);

        //Apres enregistrement, rediriger vers la liste des educatrices
        return redirect()->route('listeducatrices');
    }
}

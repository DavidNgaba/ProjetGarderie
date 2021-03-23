<?php

namespace App\Http\Controllers\Admin;

use App\Models\Educatrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        ]);

        //Creer educatrice dans la base de donnees
        Educatrice::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'sexe' => $request->sexe,
            'date_naissance' => $request->date_naissance,
            'date_embauche' => $request->date_embauche,
            'password' => Hash::make($request->password),
        ]);

        //Apres enregistrement, rediriger vers la liste des educatrices
        return redirect()->route('pageAdmin');
    }
}

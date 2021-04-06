<?php

namespace App\Http\Controllers\Enfant;

use App\Http\Controllers\Controller;
use App\Models\Enfant;
use App\Models\Recuperateur;
use App\Models\Tuteur;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class ModifierDetailsEnfantController extends Controller
{
    //fonction d'affichage de registration page
    public function tuteur(Tuteur $tuteur, Enfant $enfant)
    {
        //Extraire la liste des tuteurs de la base de données
        $alltuteurs = Tuteur::where([
            ['enfant_id', $enfant->id],
        ]);


        //Retourner la liste a la vue correspondante
        return view('enfant.modifierTuteur', [
            'enfant' => $enfant,
            'tuteur' => $tuteur,
            'tuteurs' => $alltuteurs,
        ]);
    }

    //Apres l'entrée des identifiants, enregistrer enfant dans la base de donnee
    public function updateTuteur(Request $request, Tuteur $tuteur, Enfant $enfant)
    {

        //Valider les champs
        $this->validate($request, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits:5',
        ]);

        //Creer tuteur dans la base de donnees
        Tuteur::updateOrCreate(

            ['enfant_id' => $enfant->id, 'type' => $tuteur->type],
            [
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phonenumber' => $request->phone,
            ]
        );

        //Apres enregistrement, rediriger vers la liste des enfants
        return redirect()->route('listenfants')->with('success', 'Tuteur bien modifié');
    }

    //Apres l'entrée des identifiants, enregistrer enfant dans la base de donnee
    public function addTuteur(Request $request, Enfant $enfant)
    {

        //Pour un nouveau tuteur
        $this->validate($request, [
            'Tname' => 'required|max:255',
            'Tlastname' => 'required|max:255',
            'Temail' => 'required|email|max:255',
            'Tphone' => 'required|digits:5',
            'Ttuteur' => 'required|in:principale,secondaire',
        ]);
        //Creer tuteur dans la base de donnees
        Tuteur::create([
            'name' => $request->Tname,
            'lastname' => $request->Tlastname,
            'email' => $request->Temail,
            'phonenumber' => $request->Tphone,
            'type' => $request->Ttuteur,
            'enfant_id' => $enfant->id,
        ]);

        //Apres enregistrement, rediriger vers la liste des enfants
        return redirect()->route('listenfants')->with('success', 'Tuteur bien ajouté');
    }

    //fonction d'affichage de registration page
    public function recuperateur(Enfant $enfant)
    {

        //Extraire la liste des recuperateurs de la base de données
        $recuperateurs = Recuperateur::get();

        //Retourner la liste a la vue correspondante
        return view('enfant.modifierRecuperateur', [
            'enfant' => $enfant,
            'recuperateurs' => $recuperateurs,
        ]);
    }

    //Apres l'entrée des identifiants, enregistrer enfant dans la base de donnee
    public function addRecuperateur(Request $request, Enfant $enfant)
    {

        //Pour un nouveau tuteur
        $this->validate($request, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits:5',
        ]);
        //Creer tuteur dans la base de donnees
        Recuperateur::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phonenumber' => $request->phone,
            'enfant_id' => $enfant->id,
        ]);

        //Apres enregistrement, rediriger vers la liste des enfants
        return redirect()->route('listenfants')->with('success', 'Recuperateur bien ajouté');
    }
}

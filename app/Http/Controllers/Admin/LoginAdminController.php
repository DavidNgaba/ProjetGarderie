<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{

    //Quelqu'un qui est connecté ne devrait normalement plus avoir acces a une page d'authentification 
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    //fonction d'affichage de la page login
    public function index()
    {
        return view('admin.loginAdmin');
    }

    //Apres l'entrée des identifiant, verification de l'admin
    public function check(Request $request)
    {

        //dd($request->remember);

        //Valider les champs
        $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required',
        ]);


        //Verifier avec la base de données, si non valide retourner les erreurs a la vue d'authentification de l'admin.
        //Si non, le connecté et le diriger vers sa page
        if (!Auth::guard('admin')->attempt($request->only('username', 'password'), $request->remember)) {
            return back()->with('status', 'Identifiants invalides');
        }

        return redirect()->route('pageAdmin');
    }
}

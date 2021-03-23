<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterAdminController extends Controller
{

    //Quelqu'un qui est connecté ne devrait normalement plus avoir acces a une page d'authetification 
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    //fonction d'affichage de registration page
    public function index()
    {
        return view('admin.registerAdmin');
    }

    //Apres l'entrée des identifiants, enregistrer admin dans la base de donnee
    public function check(Request $request)
    {

        //Valider les champs
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        //Creer admin dans la base de donnees
        Admin::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //Connecté l'admin
        Auth::guard('admin')->attempt($request->only('username', 'password'));

        //Apres connection, rediriger vers la page admin principale
        return redirect()->route('pageAdmin');
    }
}

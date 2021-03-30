<?php

namespace App\Http\Controllers\Admin;

use App\Models\Educatrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListeEducatricesController extends Controller
{

    //Cette fonction empeche quiconque n'etant pas admin d'acceder la liste des educatrices
    public function __construct()
    {
        $this->middleware(['admin']);
    }
    public function index()
    {
        //Extraire la liste des educatrices de la base de données
        $allEducatrices = Educatrice::get();

        //Retourner la liste a la vue correspondante
        return view('admin.listeEducatrices', [
            'educatrices' => $allEducatrices
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Educatrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListeEducatricesController extends Controller
{
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

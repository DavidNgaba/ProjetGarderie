<?php

namespace App\Http\Controllers\Educatrice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducatriceController extends Controller
{
    //Cette fonction empeche quiconque n'etant pas educatrice d'acceder la page educatrice a part l'educatrice
    public function __construct()
    {
        $this->middleware(['educatrice']);
    }

    //fonction d'affichage de la page educatrice
    public function index()
    {
        return view('educatrice.educatrice');
    }
}

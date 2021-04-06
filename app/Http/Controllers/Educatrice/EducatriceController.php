<?php

namespace App\Http\Controllers\Educatrice;

use App\Http\Controllers\Controller;
use App\Models\Educatrice;
use Illuminate\Http\Request;

class EducatriceController extends Controller
{

    //fonction d'affichage de la page educatrice
    public function index(Educatrice $educatrice)
    {
        return view('educatrice.educatrice', ['educatrice' => $educatrice]);
    }
}

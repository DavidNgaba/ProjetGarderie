<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

//Le controlleur de la page admin
class AdminController extends Controller
{

    //Cette fonction empeche quiconque n'etant pas admin d'acceder la page admin a part l'admin
    public function __construct()
    {
        $this->middleware(['admin']);
    }

    //fonction d'affichage de la page admin
    public function index()
    {
        return view('admin.admin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

//
class LogoutController extends Controller
{
    public function check()
    {
        //Vu qu'il y plusieurs comptes utilisateurs(educatrice, admin),
        // la deconnection se fera dependamment de celui qui est connecté
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } else if (Auth::guard('educatrice')->check()) {
            Auth::guard('educatrice')->logout();
        }

        return redirect()->route('acceuil');
    }
}

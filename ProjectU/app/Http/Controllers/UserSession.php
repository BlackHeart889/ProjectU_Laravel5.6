<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\Sesion;

class UserSession extends Controller
{
    public function UsuarioLogout(){
        $UserSession = new Sesion();
        $UserSession->closeSession();
        return redirect('/usuarios/login');
    }

    public function OperarioLogout(){
        $UserSession = new Sesion();
        $UserSession->closeSession();
        return redirect('/operarios/login');
    }
}

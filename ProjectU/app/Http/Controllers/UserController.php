<?php

namespace App\Http\Controllers;
use App\Applogin;
use App\Functions\Sesion;
//namespace resources\views;

use Illuminate\Http\Request;
use App\Operariolog;
use App\Usuariolog;

class UserController extends Controller
{
    

    public function Usuario(Request $request){
        
        $UserSession = new Sesion();
        $usuario = $request->input('user');
        $pass = $request->input('pass');

        $Where = ['usuario' => $usuario, 'pass' => $pass];
        $Usuarioslog = Usuariolog::where($Where)->get();
        foreach ($Usuarioslog as $usuariolog) {
            $UserSession->setCurrentUser($usuario);
            return redirect('/usuario/CuposDisponibles');
        }
        return redirect('/usuarios/login');
    }

    public function Operario(Request $request)
    {
        $UserSession = new Sesion();
        $usuario = $request->input('user');
        $pass = $request->input('pass');

        $Where = ['usuario' => $usuario, 'pass' => $pass];
        $Operarioslog = Operariolog::where($Where)->get();
        foreach ($Operarioslog as $Operariolog) {
            $UserSession->setCurrentUser($usuario);
            return redirect('/operario/RegistroNovedad');
        }
        return redirect('/operarios/login');
    }

    public function Admin()
    {
        /*$UserSession = new Sesion();
        $usuario = $request->input('user');
        $pass = $request->input('pass');

        $Where = ['usuario' => $usuario, 'pass' => $pass];
        $Operarioslog = Operariolog::where($Where)->get();
        foreach ($Operarioslog as $Operariolog) {
            if($Operariolog->adm == true){
                $UserSession->setCurrentUser($usuario);
                return redirect('/operario/RegistroNovedad');
            }
        }
        return redirect('/operarios/login');*/
    }
}



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
        $alerta = "Error de usuario o contraseña.";
        return view('Operario/logUsuario')->with('alerta', $alerta);
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
        $alerta = "Error de usuario o contraseña.";
        return view('Operario/logOperario')->with('alerta', $alerta);
    }

    public function Administrador(Request $request)
    {
        $UserSession = new Sesion();
        $usuario = $request->input('user_adm');
        $pass = $request->input('pass_adm');
        $adm = true;
        $Where = ['usuario' => $usuario, 'pass' => $pass];
        $Operarioslog = Operariolog::where($Where)->get();
        foreach ($Operarioslog as $Operariolog) {
            if($Operariolog->adm == $adm){
                $UserSession->setCurrentUser($usuario);
                return redirect('/administrador/AgregarUsuario');
            } else{
                $alerta = "No tiene los permisos suficientes para acceder.";
                return view('Operario/logOperario')->with('alerta', $alerta);
            }
        }
        $alerta = "Error de usuario o contraseña.";
        return view('Operario/logOperario')->with('alerta', $alerta);
    }
}



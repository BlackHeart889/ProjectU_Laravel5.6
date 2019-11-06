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
        $script = '<script type="text/javascript">
                    alert("Error de usuario o contraseña, por favor verifique.");
                    window.location="/operarios/login";
                    </script>';
                    echo $script;
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
        $script = '<script type="text/javascript">
                    alert("Error de usuario o contraseña, por favor verifique.");
                    window.location="/operarios/login";
                    </script>';
                    echo $script;
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
                $script = '<script type="text/javascript">
                    alert("No tiene los permisos suficientes para acceder.");
                    window.location="/operarios/login";
                    </script>';
                    echo $script;
            }
        }
        $script = '<script type="text/javascript">
                    alert("Error de usuario o contraseña, por favor verifique.");
                    window.location="/operarios/login";
                    </script>';
                    echo $script;
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\Sesion;
use App\Applogin;
use App\Operariolog;
use App\Usuariolog;

class PagesController extends Controller
{

    //Usuario
    public function Usuario(){
        $UserSession = new Sesion();
        if(isset($_SESSION['user'])){
            $Where = ['usuario' => $_SESSION['user']];
            $Usuarioslog = Usuariolog::where($Where)->get();
        foreach ($Usuarioslog as $Usuariolog) {
            return redirect('/usuario/CuposDisponibles');
        }
            $UserSession->closeSession();
        }
        return view('Usuario/logUsuario');
    }

    public function CuposDisponibles(){
        return view('Usuario/cuposDisponibles');
    }

    public function NuevoVehiculo(){
        return view('Usuario/nuevoVehiculo');
    }


    //Operario
    public function Operario(){
        $UserSession = new Sesion();
        if(isset($_SESSION['user'])){
            
            $usuario = $_SESSION['user'];
            $adm = true;
            $Where = ['usuario' => $usuario];
            $Operarioslog = Operariolog::where($Where)->get();
            foreach ($Operarioslog as $Operariolog) {
                if($Operariolog->adm == $adm){
                    return redirect('/administrador/AgregarUsuario');
                } else{
                    return redirect('/operario/RegistroNovedad');
                }
            }
            $UserSession->closeSession();
        }
        return view('Operario/logOperario');
    }

    public function RegistroNovedad(){
        return view('Operario/registroNovedad');
    }

    public function ConsultaVehiculo(){
        return view('Operario/consultaVehiculoGet');
    }

    public function ConsultaVehiculoR(){
        return view('Operario/consultaVehiculoPost');
    }

    public function ConsultaIngreso(){
        return view('Operario/consultaIngreso');
    }

    public function RegistroVisitante(){
        return view('Operario/ingresoVisitante');
    }

    public function ConsultarIngresos(){
        return view('Operario/resultadosConsultaIngreso');
    }


    //Administrador
    public function AgregarUsuario(){
        return view('Administrador/agregarUsuario');
    }

    public function BuscarUsuario(){
        return view('Administrador/buscarUsuario');
    }

    public function AgregarOperario(){
        return view('Administrador/agregarOperario');
    }

    public function BuscarOperario(){
        return view('Administrador/buscarOperario');
    }

    public function ListarOperario(){
        return view('Administrador/listarOperarios');
    }
}

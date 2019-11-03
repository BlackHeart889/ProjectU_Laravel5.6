<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\Sesion;

class PagesController extends Controller
{

    //Usuario
    public function Usuario(){
        $UserSession = new Sesion();
        if(isset($_SESSION['user'])){
            return redirect('/usuario/CuposDisponibles');
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
            return redirect('/operario/RegistroNovedad');
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
}

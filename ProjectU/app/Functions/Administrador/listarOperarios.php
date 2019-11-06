<?php

namespace App\Functions\Administrador;

use App\Operario;
use App\Operariolog;

class listarOperarios{

    public function Listar(){

        $Operarios = Operario::all();
        $tabla = '<table class="egt">
                    <caption> Operarios Registrados </caption>
                    <tr>
                        <th>Nombre</th>
                        <th>Id</th>
                        <th>Cargo</th>
                        <th>Activo</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                    <tr>'; 
        foreach ($Operarios as $Operario ) {
            $Where = ['id_operario' => $Operario->id_operario];
            $Operarioslog = Operariolog::where($Where)->get();
            $Usuario = "Ninguno";
            $Rol = "Ninguno";
            $Sesion = "Si";
            foreach ($Operarioslog as $Operariolog ) {
                $Usuario = $Operariolog->usuario;
                if($Operariolog->adm == true){
                    $Rol = "Administrador";
                } else{
                    $Rol = "Operario";
                }
            }
            if($Operario->sesion_activa == false){
                $Sesion = "No";
            }
            
            $tabla.='<tr>'
            .'<td>'.$Operario->nom_operario.'</td>'
            .'<td>'.$Operario->id_operario.'</td>'
            .'<td>'.$Operario->cargo_operario.'</td>'
            .'<td>'.$Sesion.'</td>'
            .'<td>'.$Usuario.'</td>'
            .'<td>'.$Rol.'</td>'
        .'</tr>';
        }
        echo $tabla;
    }
}
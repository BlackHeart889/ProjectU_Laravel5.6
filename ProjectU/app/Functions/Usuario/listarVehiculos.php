<?php

namespace App\Functions\Usuario;

use App\Vehiculo;

class listarVehiculos{

    public function listar($id_usuario){
        $Where = ['id_usuario' => $id_usuario];
        $Vehiculos = Vehiculo::where($Where)->get();
        $tabla = '<table class="egt">
                    <caption> Vehiculos Registrados </caption>
                    <tr>
                        <th>Placa</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Modelo del Vehiculo</th>
                        <th>Color del Vehiculo</th>
                    <tr>'; 
        foreach ($Vehiculos as $Vehiculo) {
            $tabla.='<tr>'
                        .'<td>'.$Vehiculo->placa.'</td>'
                        .'<td>'.$Vehiculo->tipo_vehiculo.'</td>'
                        .'<td>'.$Vehiculo->modelo_vehiculo.'</td>'
                        .'<td>'.$Vehiculo->color_vehiculo.'</td>'
                    .'</tr>';
        }

        echo $tabla;
    }
}
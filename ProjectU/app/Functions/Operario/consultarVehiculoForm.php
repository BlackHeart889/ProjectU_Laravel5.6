<?php

namespace App\Functions\Operario;

use App\Usuario;
use App\Vehiculo;

class consultarVehiculoForm{

    public static function buscar($placa, consultarVehiculoForm $Instance){
        $Where = ['placa' => $placa];
        $Vehiculos = Vehiculo::where($Where)->get();
        $Informacion;  $estado = false;
        foreach ($Vehiculos as $Vehiculo) {
            $Informacion = array('id_propietario' => $Vehiculo->id_usuario,
                                 'placa' => $Vehiculo->placa,
                                 'tipo' => $Vehiculo->tipo_vehiculo,
                                 'modelo' => $Vehiculo->modelo_vehiculo,
                                 'color' => $Vehiculo->color_vehiculo);
            $Where = ['id_usuario' => $Informacion["id_propietario"]];
            $Usuarios = Usuario::where($Where)->get();
            foreach ($Usuarios as $Usuario ) {
            $Informacion["nombre"] = $Usuario->nom_usuario;
            $Informacion["ocupacion"] = $Usuario->ocupacion_usuario;
            break;
            }
        $Instance->formulario($Informacion);
        $estado = true;
        }
        if($estado == false){
            $Instance->formularioVacio();
        }
    }

    function formulario($Informacion){
        $Consultar = '
                    <label for="placa">Placa Vehículo:</label>
                    <input type="text" id="placa" name="placa" placeholder="000-AAA" value="'.$Informacion['placa'].'" required>
                    <section id="typev">
                        <h4>Tipo de vehiculo:</h4>
                        <output id="tipov">'.$Informacion['tipo'].'</output>
                    </section>
                    <section id="modelv">
                        <h4>Modelo del vehiculo:</h4>
                        <output id="modelv">'.$Informacion['modelo'].'</output>
                    </section>
                    <section class="colorv">
                        <h4>Color del vehiculo:</h4>
                        <output id="colorv">'.$Informacion['color'].'</output>
                    </section>
                    <h4>Nombre Propietario:</h4>
                    <output id="nombrep" for="nombrep">'.$Informacion['nombre'].'</output>
                    <h4>Identificación Propietario:</h4>
                    <output id="idp" for="idp">'.$Informacion['id_propietario'].'</output>
                    <h4>Ocupación:</h4>
                    <output id="ocupacion" for="ocupacion"> '.$Informacion['ocupacion'].' <br><br></output>
                    <input type="submit" id= "bnt-submit" class="submit-btn" value="Consultar">
                    </form>';
        echo $Consultar;
    }

    function formularioVacio(){
        $Consultar = '<label for="placa">Placa Vehículo:</label>
        <input type="text" id="placa" name="placa" placeholder="000-AAA" required>
        <section id="typev">
            <h4>Tipo de vehiculo:</h4>
            <output id="tipov"> ...</output>
        </section>
        <section id="modelv">
            <h4>Modelo del vehiculo:</h4>
            <output id="modelv"> ...</output>
        </section>
        <section class="colorv">
            <h4>Color del vehiculo:</h4>
            <output id="colorv"> ...</output>
        </section>
        <h4>Nombre Propietario:</h4>
        <output id="nombrep" for="nombrep"> ...</output>
        <h4>Identificación Propietario:</h4>
        <output id="idp" for="idp"> ...</output>
        <h4>Ocupación:</h4>
        <output id="ocupacion" for="ocupacion"> ...<br><br></output>
        <input type="submit" id= "bnt-submit" class="submit-btn" value="Consultar">';
        echo $Consultar;
    }
}


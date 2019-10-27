<?php
namespace App\Functions\Usuario;

use App\Parqueadero;
/*include '../app/Functions/Sesion.php';
include '../app/Parqueadero.php';*/  

class Cupos {

    public static function buscar(Cupos $cuposInstance){
        $CuposDisponibles = Parqueadero::orderBy('id_parqueadero', 'ASC')->get();
    
        foreach ($CuposDisponibles as $Parqueadero ) {
            $id = $Parqueadero->id_parqueadero;
            $zona = $Parqueadero->zona;
            $vehiculos = $Parqueadero->cupos_dvehiculos;
            $motos = $Parqueadero->cupos_dmotocicletas;
            $cuposT[] = new p($zona, $vehiculos , $motos);
        }
        $cuposInstance->formulario1($cuposT);
    }

    function formulario1($cuposT){
        $Buscar = '<div class="sec-1">
                <h1>ZONA ADMINISTRATIVOS</h1>
                <p>'.$cuposT[0]->getCuposDVehiculos().' Cupos para Vehiculos</p>
                <p>'.$cuposT[0]->getCuposDMotocicletas().' Cupos para Motocicletas</p>
                <h1>ZONA BIBLIOTECA</h1>
                <p>'.$cuposT[1]->getCuposDVehiculos().' Cupos para Vehiculos</p>
                <p>'.$cuposT[1]->getCuposDMotocicletas().' Cupos para Motocicletas</p>
                <h1>ZONA LABORATORIOS</h1>
                <p>'.$cuposT[2]->getCuposDVehiculos().' Cupos para Vehiculos</p>
                <p>'.$cuposT[2]->getCuposDMotocicletas().' Cupos para Motocicletas</p>
              </div>
              <div class="sec-2">
                <h1>ZONA BLOQUE F</h1>
                <p>'.$cuposT[3]->getCuposDVehiculos().' Cupos para Vehiculos</p>
                <p>'.$cuposT[3]->getCuposDMotocicletas().' Cupos para Motocicletas</p>
                <h1>ZONA AUDITORIO</h1>
                <p>'.$cuposT[4]->getCuposDVehiculos().' Cupos para Vehiculos</p>
                <p>'.$cuposT[4]->getCuposDMotocicletas().' Cupos para Motocicletas</p>
              </div>';
        echo $Buscar;
    }
}

class p{

    private $zona; 
    private $cuposDVehiculos; 
    private $cuposDMotocicletas;

    public function __construct($zona, $cuposDVehiculos, $cuposDMotocicletas){
        $this->zona = $zona;
        $this->cuposDVehiculos = $cuposDVehiculos;
        $this->cuposDMotocicletas = $cuposDMotocicletas;
    }


    public function getZona(){
        return $this->zona;
    }
    public function getCuposDVehiculos(){
        return $this->cuposDVehiculos;
    }
    public function getCuposDMotocicletas(){
        return $this->cuposDMotocicletas;
    }
}




                            
                         
                        
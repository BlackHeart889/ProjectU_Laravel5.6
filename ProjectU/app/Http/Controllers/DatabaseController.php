<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuariolog;
use App\Vehiculo;
use App\Ingresousuario;
use App\Salidausuario;
use App\Vehiculovisitante;
use App\Ingresovisitante;
use App\Salidavisitante;
use App\Parqueadero;
use App\Functions\Sesion;

class DatabaseController extends Controller
{
    public function NuevoVehiculo(Request $request){
        
        try{
            Vehiculo::create($request->all()) ;
            echo "vehiculo registrado correctamente";
        }catch(\Exception $e){
            
            return redirect('/usuario/NuevoVehiculo'); 
        }
    }

    public function RegistrarNovedad(Request $request){
        $actualizaCupos = false;
        $bicicleta = false;
        if($request->input('entrada')){
            try{
                $parqueadero = Parqueadero::find($request->id_parqueadero);
                if($request->input('tipo_vehiculo') == 'Automovil'){
                    if($parqueadero->cupos_dvehiculos > 0){
                        Ingresousuario::create($request->all());
                        $parqueadero->cupos_dvehiculos--;
                        $actualizaCupos = true;
                        //echo "Entrada de vehiculo";
                    } else{
                        //echo "no hay cupo en la zona seleccionado";
                    }
                } else if($request->input('tipo_vehiculo') == 'Motocicleta'){
                    if($parqueadero->cupos_dmotocicletas > 0){
                        Ingresousuario::create($request->all());
                        $parqueadero->cupos_dmotocicletas--;
                        $actualizaCupos = true;
                        //echo "Entrada de motocicleta";
                    } else{
                        //echo "No hay cupo en la zona seleccionada";
                    }
                } else if($request->input('tipo_vehiculo') == 'Bicicleta'){
                    Ingresousuario::create($request->all());
                    $actualizaCupos = true;
                    $bibicleta = true; 
                }
                if($actualizaCupos == true){
                    //echo "cupos actualizados correctamente";
                    if($bicicleta == false){
                        $parqueadero->save();
                    }
                    $script = '<script type="text/javascript">
                    alert("Entrada registrada correctamente.");
                    window.location="/operario/RegistroNovedad";
                    </script>';
                    echo $script;
                } else{
                    $script = '<script type="text/javascript">
                    alert("No hay cupo en la zona seleccionada.");
                    window.location="/operario/RegistroNovedad";
                    </script>';
                    echo $script;
                }

            } catch(Exception $e){
                $script = '<script type="text/javascript">
                    alert("Vehiculo no esta registrado en la base de datos.");
                    window.location="/operario/RegistroNovedad";
                    </script>';
                    echo $script;
                //echo "Vehiculo no esta registrado en la base de datos";
            }
            
        } else if($request->input('salida')){
            try{
                Salidausuario::create($request->all());
                $parqueadero = Parqueadero::find($request->id_parqueadero);
                if($request->input('tipo_vehiculo') == 'Automovil'){
                    $parqueadero->cupos_dvehiculos++;
                } else if($request->input('tipo_vehiculo') == 'Motocicleta'){
                    $parqueadero->cupos_dmotocicletas++;
                }
                else if($request->input('tipo_vehiculo') == 'Bicicleta'){
                    $bicicleta = true;
                }
                if($bicicleta == false){
                    $parqueadero->save();
                }
                $script = '<script type="text/javascript">
                alert("Salida registrada correctamente.");
                window.location="/operario/RegistroNovedad";
                </script>';
                echo $script;
            } catch(Exception $e){
                $script = '<script type="text/javascript">
                alert("Vehiculo no esta registrado en la base de datos.");
                window.location="/operario/RegistroNovedad";
                </script>';
                echo $script;
                //echo "Vehiculo no esta registrado en la base de datos";
            }
        } else if($request->input('salidaVisitante')){
            try{
                Salidavisitante::create($request->all());
                $parqueadero = Parqueadero::find($request->id_parqueadero);
                if($request->input('tipo_vehiculo') == 'Automovil'){
                    $parqueadero->cupos_dvehiculos++;
                } else if($request->input('tipo_vehiculo') == 'Motocicleta'){
                    $parqueadero->cupos_dmotocicletas++;
                }
                else if($request->input('tipo_vehiculo') == 'Bicicleta'){
                    $bibicleta = true;
                }
                if($bicicleta == false){
                    $parqueadero->save();
                }
                
                $script = '<script type="text/javascript">
                alert("Salida registrada correctamente.");
                window.location="/operario/RegistroNovedad";
                </script>';
                echo $script;
            }catch(Exception $e){
                $script = '<script type="text/javascript">
                alert("Vehiculo no esta registrado en la base de datos.");
                window.location="/operario/RegistroNovedad";
                </script>';
                echo $script;
            }
        }
    }

    public function RegistrarVisitante(Request $request){
        $bicicleta = false;
        $actualizaCupos = false;
        $parqueadero = Parqueadero::find($request->id_parqueadero);
        $vehiculoVisitante = Vehiculovisitante::find($request->placa);
        if($vehiculoVisitante == null){
            Vehiculovisitante::create($request->all());
        }

        if($request->input('tipo_vehiculo') == 'Automovil'){
            if($parqueadero->cupos_dvehiculos > 0){
                Ingresovisitante::create($request->all());
                $parqueadero->cupos_dvehiculos--;
                $actualizaCupos = true;
                //echo "Entrada de vehiculo";
            } else{
                //echo "no hay cupo en la zona seleccionado";
            }
        } else if($request->input('tipo_vehiculo') == 'Motocicleta'){
            if($parqueadero->cupos_dmotocicletas > 0){
                Ingresvisitante::create($request->all());
                $parqueadero->cupos_dmotocicletas--;
                $actualizaCupos = true;
                //echo "Entrada de motocicleta";
            } else{
                //echo "No hay cupo en la zona seleccionada";
            }
        } else if($request->input('tipo_vehiculo') == 'Bicicleta'){
            $actualizaCupos = true;
            $bibicleta = true; 
            Ingresvisitante::create($request->all());
        }

        if($actualizaCupos == true){
            if($bicicleta == false){
                $parqueadero->save();
            }
            $script = '<script type="text/javascript">
                    alert("Entrada registrada correctamente.");
                    window.location="/operario/RegistroNovedad";
                    </script>';
                    echo $script;
            //return redirect('/operario/RegistroNovedad');
        }else{
            $script = '<script type="text/javascript">
                    alert("No hay cupo en la zona seleccionada.");
                    window.location="/operario/RegistroVisitante";
                    </script>';
                    echo $script;
        }  
    }
}

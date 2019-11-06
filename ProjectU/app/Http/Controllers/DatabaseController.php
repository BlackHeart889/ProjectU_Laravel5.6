<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuariolog;
use App\Operariolog;
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
            $alerta = "Vehiculo registrado correctamente.";
            return view('Usuario/nuevoVehiculo')->with('alerta', $alerta);
            //echo "vehiculo registrado correctamente";
        }catch(\Exception $e){
            $alerta = "El vehiculo ya se encuentra registrado.";
            return view('Usuario/nuevoVehiculo')->with('alerta', $alerta);
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
                    $alerta = "Entrada registrada correctamente.";
                    return view('Operario/registroNovedad')->with('alerta', $alerta);
                } else{
                    $alerta = "No hay cupo en la zona seleccionada.";
                    return view('Operario/registroNovedad')->with('alerta', $alerta);
                }

            } catch(\Exception $e){
                $alerta = "Vehiculo no registrado en la base de datos.";
                
                return view('Operario/registroNovedad')->with('alerta', $alerta);
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
                $alerta = "Salida registrada correctamente.";
                return view('Operario/registroNovedad')->with('alerta', $alerta);
            } catch(\Exception $e){
                $alerta = "Vehiculo no registrado en la base de datos.";
                return view('Operario/registroNovedad')->with('alerta', $alerta);
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
                
                $alerta = "Salida de visitante registrada correctamente.";
                return view('Operario/registroNovedad')->with('alerta', $alerta);
            }catch(\Exception $e){
                $alerta = "Vehiculo no registrado en la base de datos.";
                return view('Operario/registroNovedad')->with('alerta', $alerta);
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
            $alerta = "Entrada de visitante registrada correctamente.";
            return view('Operario/registroNovedad')->with('alerta', $alerta);
            //return redirect('/operario/RegistroNovedad');
        }else{
            $alerta = "No hay cupo en la zona seleccionada.";
            return view('Operario/registroNovedad')->with('alerta', $alerta);
        }  
    }

    public function BuscarUsuario(Request $request){
        $usuario = $request->input('user');
        $Where = ['usuario' => $usuario];
        $Operarioslog = Operariolog::where($Where)->get();
        foreach ($Operarioslog as $Operariolog) {
            return view('Administrador/modificarUsuario')->with('user',$usuario)
                                                        ->with('pass', $Operariolog->pass)
                                                        ->with('id_operario', $Operariolog->id_operario);
        }
    }

    public function ModificarUsuario(Request $request){
        $operario = Operariolog::find($request->input('user'));
        $operario->pass = $request->input('pass');
        $operario->id_operario = $request->input('id_operario');

        try {
            $operario->save();
            $alerta = "Usuario modificado correctamente.";
            return view('Administrador/buscarUsuario')->with('alerta', $alerta);
        }catch(\Exception $e) {
            $script = '<script type="text/javascript">
                    alert("El id ingresado no se encuentra registrado en la base de datos.");
                    window.location="/administrador/BuscarUsuario";
                    </script>';
                    echo $script;
        }
    }
}

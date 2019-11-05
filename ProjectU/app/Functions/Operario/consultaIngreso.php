<?php

namespace App\Functions\Operario;

use Illuminate\Http\Request;
use App\Ingresousuario;
use App\Salidausuario;
use App\Ingresovisitante;
use App\Salidavisitante;

class consultaIngreso{


    public function Consultar($FechaDesde, $FechaHasta){

        $IngresoUsuarios = Ingresousuario::whereBetween('fecha', [$FechaDesde, $FechaHasta])->get();
        $tabla = '<table class="egt">
                    <caption> Ingreso de Usuarios </caption>
                    <tr>
                        <th>Placa</th>
                        <th>Parqueadero</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Operario</th>
                    <tr>'; 

        foreach ($IngresoUsuarios as $IngresoUsuario) {
            $tabla.='<tr>'
                        .'<td>'.$IngresoUsuario->placa.'</td>'
                        .'<td>'.$IngresoUsuario->id_parqueadero.'</td>'
                        .'<td>'.$IngresoUsuario->tipo_vehiculo.'</td>'
                        .'<td>'.$IngresoUsuario->hora.'</td>'
                        .'<td>'.$IngresoUsuario->fecha.'</td>'
                        .'<td>'.$IngresoUsuario->id_operario.'</td>'
                    .'</tr>';
        }

        $tabla.='</table><br><br>';

        $SalidaUsuarios = Salidausuario::whereBetween('fecha', [$FechaDesde, $FechaHasta])->get();
        $tabla .= '<table class="egt">
                    <caption> Salida de Usuarios </caption>
                    <tr>
                        <th>Placa</th>
                        <th>Parqueadero</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Operario</th>
                    <tr>'; 

        foreach ($SalidaUsuarios as $SalidaUsuario) {
            $tabla.='<tr>'
                        .'<td>'.$SalidaUsuario->placa.'</td>'
                        .'<td>'.$SalidaUsuario->id_parqueadero.'</td>'
                        .'<td>'.$SalidaUsuario->tipo_vehiculo.'</td>'
                        .'<td>'.$SalidaUsuario->hora.'</td>'
                        .'<td>'.$SalidaUsuario->fecha.'</td>'
                        .'<td>'.$SalidaUsuario->id_operario.'</td>'
                    .'</tr>';
        }

        $tabla.='</table><br><br>';


        $IngresoVisitantes = Ingresovisitante::whereBetween('fecha', [$FechaDesde, $FechaHasta])->get();
        $tabla .= '<table class="egt">
                    <caption> Ingreso de Visitantes </caption>
                    <tr>
                        <th>Placa</th>
                        <th>Parqueadero</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Nombre</th>
                        <th>Tipo Id</th>
                        <th>Id</th>
                        <th>Motivo</th>
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Operario</th>
                    <tr>'; 

        foreach ($IngresoVisitantes as $IngresoVisitante) {
            $tabla.='<tr>'
                        .'<td>'.$IngresoVisitante->placa.'</td>'
                        .'<td>'.$IngresoVisitante->id_parqueadero.'</td>'
                        .'<td>'.$IngresoVisitante->tipo_vehiculo.'</td>'
                        .'<td>'.$IngresoVisitante->n_visitante.'</td>'
                        .'<td>'.$IngresoVisitante->tipo_id.'</td>'
                        .'<td>'.$IngresoVisitante->id_visitante.'</td>'
                        .'<td>'.$IngresoVisitante->motivo.'</td>'
                        .'<td>'.$IngresoVisitante->hora.'</td>'
                        .'<td>'.$IngresoVisitante->fecha.'</td>'
                        .'<td>'.$IngresoVisitante->id_operario.'</td>'
                    .'</tr>';
        }

        $tabla.='</table><br><br>';


        $SalidaVisitantes = Salidavisitante::whereBetween('fecha', [$FechaDesde, $FechaHasta])->get();
        $tabla .= '<table class="egt">
                    <caption> Salida de Visitantes </caption>
                    <tr>
                        <th>Placa</th>
                        <th>Parqueadero</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Operario</th>
                    <tr>'; 

        foreach ($SalidaVisitantes as $SalidaVisitante) {
            $tabla.='<tr>'
                        .'<td>'.$SalidaVisitante->placa.'</td>'
                        .'<td>'.$SalidaVisitante->id_parqueadero.'</td>'
                        .'<td>'.$SalidaVisitante->tipo_vehiculo.'</td>'
                        .'<td>'.$SalidaVisitante->hora.'</td>'
                        .'<td>'.$SalidaVisitante->fecha.'</td>'
                        .'<td>'.$SalidaVisitante->id_operario.'</td>'
                    .'</tr>';
        }

        $tabla.='</table><br><br>';
        echo $tabla;
    }
}

/*"<table class="egt">
<tr>
  <th>Hoy</th>
  <th>Mañana</th>
  <th>Lunes</th>
</tr>
<tr>
  <td>Soleado</td>
  <td>Mayormente soleado</td>
  <td>Parcialmente nublado</td>
</tr>
<tr>
  <td>19°C</td>
  <td>17°C</td>
  <td>12°C</td>
</tr>
<tr>
  <td>E 13 km/h</td>
  <td>E 11 km/h</td>
  <td>S 16 km/h</td>
</tr>
</table>"*/
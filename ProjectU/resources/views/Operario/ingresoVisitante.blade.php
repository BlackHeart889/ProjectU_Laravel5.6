<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/ingresoVisitantes.css') !!}">
    <title>Registro Visitantes</title>
</head>
<body>
    <header>
        @include('shared.navbar')
    </header>
    <div class="contenedor-formulario">
        <div class="wrap">
            <!-- Formulario --> 
            <form action="/operario/RegistrarVisitante" class="formulario" name="formulario_visitante" method="POST">
                    <div>
                        <h3>REGISTRO VISITANTES</h3>
                        {{ csrf_field() }}
                        <input type="hidden" name="id_operario", value="
                        @php
                        use App\Operariolog;
                        use App\Functions\Sesion;
                        $UserSession = new Sesion();
                        $usuario = $UserSession->getCurrentUser();
                        $Where = ['usuario' => $usuario];
                        $Operarioslog = Operariolog::where($Where)->get();
                        foreach ($Operarioslog as $Operariolog ) {
                            echo $Operariolog->id_operario;
                        }
                        @endphp">
                        <input type="hidden" name="hora" value="@php echo date("H:i:s"); //HH:mm:ss @endphp">
                        <input type="hidden" name="fecha" value="@php echo date("Y-m-d"); //yyyy-mm-dd @endphp">

                        <div class="input-group">
                            <input type="text" id="nombre" name="n_visitante" required>
                            <label class="label" for="nombre">Nombre Completo:</label>
                        </div>
                        <div class="input-group-select">
                            <select name="tipo_id">
                                <option value="Cedula de Ciudadania"> Cedula de Ciudadania</option>
                                <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" id="id" name="id_visitante" required>
                            <label class="label" for="identificacion">N° de identificación:</label>
                        </div>
                        <div class="input-group-select">
                            <select name="tipo_vehiculo">
                                <option value="Automovil">Automóvil</option>
                                <option value="Motocicleta">Motocicleta</option>
                                <option value="Bicicleta">Bicicleta</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" id="placa" name="placa" required>
                            <label class="label" for="placa">Placa del Vehiculo:</label>
                        </div>
                        <div class="input-group">
                            <input type="text" id="motivo" name="motivo" required>
                            <label class="label" for="motivo">Motivo de Visita:</label>
                        </div>
                        <div class="input-group-select">
                            <select name="id_parqueadero">
                                <option value="001">Zona Administrativos</option>
                                <option value="002">Zona Biblioteca</option>
                                <option value="003">Zona Laboratiorios</option>
                                <option value="004">Zona Bloque F</option>
                                <option value="005">Zona Auditorio</option>
                            </select>
                        </div>
                        <input type="submit" id="btn-submit" class="submit-btn" value="Entrada">
                    </div>    
            </form>
        </div>
        <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
        <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
        <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
    </div>

    <script src="js/formulario.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport"
        content="width=deveice-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/ingresoUsuarios.css') !!}">
    <title>Ingreso Vehiculo</title>
</head>

<body>
    <header>
        @include('shared.navbar')
    </header>

    <main>
        <section class="presentation">
            <div class="introduction">
                <div class="intro-text">
                    <h1>Ingreso y Salida <br> de Vehiculos</h1>
                    <p><br>Ingrese la placa del vehiculo</p>
                    <form class="form" action="/operario/RegistrarNovedad" method="POST">
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
                        <input type="hidden" name="hora" value="@php date_default_timezone_set('America/Bogota'); echo date("H:i:s"); //HH:mm:ss @endphp">
                        <input type="hidden" name="fecha" value="@php echo date("Y-m-d"); //yyyy-mm-dd @endphp">
                        <input type="text" name="placa" autocomplete="off" required>
                        <label for="name" class="label-name">
                            <spam class="content-name">000-AAA</spam>
                        </label>
                        <div class="input-group-select">
                            <select name="tipo_vehiculo">
                                <option value="Automovil">Automóvil</option>
                                <option value="Motocicleta">Motocicleta</option>
                                <option value="Bicicleta">Bicicleta</option>
                            </select>
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
                        <button type="submit" class="cta-find" name="entrada" value="entrada">Registrar entrada</button>
                        <button type="submit" class="cta-find" name="salida" value="salida">Registrar salida</button>
                        <a href="/operario/RegistroVisitante"><button class="cta-register">Registrar Visitante</button></a>
                        <button type="submit" class="cta-find" name="salidaVisitante" value="salidaVisitante">Salida visitante</button>
                    </form>
                </div>
                
            </div>
            <div class="cover">
                    <img src="{{ asset('img/escudo-ucundinamarca-inferior.png') }}" alt="">
                    @php 
                        use App\Functions\Usuario\Cupos;
                        $cupos = new Cupos();
                        Cupos::buscar($cupos);
                    @endphp
                </div>
        </section>
        <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
        <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
        <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
    </main>
</body>

@php
    if(isset($alerta)){
        $script = '<script type="text/javascript">
                alert("'.$alerta.'");
                </script>';
        echo $script;
        unset($alerta);
    }
@endphp
</html>
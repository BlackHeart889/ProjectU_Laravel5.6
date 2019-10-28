<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('css/nuevoVehiculo.css') !!}">
    <title>Agregar vehiculo</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="{{ asset('/img/university_30px.png') }}" alt="">
            <h4 class="logo">Universidad De Cundinamarca</h4>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="/usuario/CuposDisponibles">Consultar cupos</a></li>
                <li><a class="nav-link" href="/usuario/NuevoVehiculo">Agregar vehiculo</a></li>
                <li><a class="nav-link" href="/usuario/logout">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="contenedor-formulario">
            <div class="wrap">
                <!-- Formulario -->
                <form action="/usuario/InsertarNuevoVehiculo" class="formulario" name="formulario_nVehiculo" method="POST">
                    {{ csrf_field() }}
                   
                    <div>
                        <input type="hidden" name="id_usuario" value="
                        @php
                        use App\Usuariolog;
                        use App\Functions\Sesion;
                        $UserSession = new Sesion();
                        $usuario = $UserSession->getCurrentUser();
                        $Where = ['usuario' => $usuario];
                        $Usuarioslog = Usuariolog::where($Where)->get();
                        foreach ($Usuarioslog as $Usuariolog ) {
                            echo $Usuariolog->id_usuario;
                        }
                        @endphp" >
                        
                        <div class="input-group">
                            <label class="label" for="nombre">Placa</label>
                            <input type="text" id="placa" name="placa" placeholder="000-AAA" required>
                        </div>
                        <div class="input-group">
                            <label class="label" for="identificacion">Tipo de vehiculo</label>
                            <div class="input-group-select">
                                <select name="tipo_vehiculo">
                                    <option value="Automovil">Automóvil</option>
                                    <option value="Motocicleta">Motocicleta</option>
                                    <option value="Bicicleta">Bicicleta</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label" for="placa">Modelo del vehiculo</label>
                            <input type="text" id="modelo_vehiculo" name="modelo_vehiculo" placeholder="Ingrese el modelo del vehiculo"
                                required>
                        </div>
                        <div class="input-group">
                            <label for="">Color vehiculo</label>
                            <input type="text" id="color_vehiculo" name="color_vehiculo" placeholder="Ingrese color del vehciulo">
                        </div>
                        <input type="submit" id="btn-submit" class="submit-btn" value="Registrar">
                    </div>
                </form>
            </div>
    </main>
    <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
    <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
    <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
</body>

</html>
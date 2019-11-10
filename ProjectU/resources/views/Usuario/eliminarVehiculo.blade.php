<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/consultaVehiculos.css') !!}">
    <title>Consulta Vehículo</title>
</head>
<body>
    <header>
        @include('shared.navbaru')
    </header>
    <main>
        <section class="presentation">
            <div class="cta">
                <div class="intro-text">
                    <div class="form">
                        <form action="/operario/ConsultarVehiculoR" method="POST">
                            <label for="placa">Placa Vehículo:</label>
                            <input type="text" id="placa" name="placa" placeholder="000-AAA"
                                value="'.$Informacion['placa'].'" required>
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
                            <input type="submit" id="bnt-submit" class="submit-btn" value="Eliminar">
                        </form>';
                    </div>
                </div>
            </div>
        </section>
        <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
        <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
        <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
    </main>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/eliminarV.css') !!}">
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
                        <form action="/usuario/EliminarVehiculo" method="POST">
                            {{ csrf_field() }}

                            <input type="hidden" name="placa" value="@php echo $placa; @endphp">
                            <section id="placa">
                                <h4>Placa del vehiculo</h4>
                                <output id="placa">@php echo $placa; @endphp</output>
                            </section>
                            <section id="typev">
                                <h4>Tipo de vehiculo</h4>
                                <output id="tipov">@php echo $tipo_vehiculo; @endphp</output>
                            </section>
                            <section id="modelv">
                                <h4>Modelo del vehiculo</h4>
                                <output id="modelv">@php echo $modelo_vehiculo; @endphp</output>
                            </section>
                            <section class="colorv">
                                <h4>Color del vehiculo</h4>
                                <output id="colorv">@php echo $color_vehiculo; @endphp</output>
                            </section>
                            <section class="volver">
                                <a href="/usuario/BuscarVehiculo"><button class="submit-btn"
                                        type="button">Volver</button></a>
                            </section>
                            <section class="eliminar">
                                <button class="submit-btn" type="submit">Eliminar</button>
                            </section>
                        </form>
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
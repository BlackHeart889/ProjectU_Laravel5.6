<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('css/buscarUsuario.css') !!}">
    <title>Buscar vehiculo</title>
</head>

<body>
    <header>
        @include('shared.navbaru')
    </header>
    <main>
        <section class="presentation">
            <div class="introduction">
                <div class="intro-text">
                    <form action="/usuario/eliminarVehiculo" method="POST">
                        {{ csrf_field() }}
                        <label for="finduser">Buscar vehiculo</label>
                        <input type="text" placeholder="Placa Vehiculo" name="id_operario">
                        <input type="submit" id="btn-submit" class="submit-btn" value="Buscar">
                    </form> 
                </div>
            </div>
        </section>
        <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
        <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
        <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
    </main>
</body>
</html>
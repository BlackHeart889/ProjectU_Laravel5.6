<!doctype html>
<html lang="en">

<title>Busqueda</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/consultaIngreso.css') !!}">
</head>
<header>
    @include('shared.navbar')
</header>
<main>
    <section class="presentation">
        <div class="intro-text">
            <h1>Ingrese Fecha</h1>
            <div class="form">
                <form action="/operario/ConsultarIngresos" method="POST" target="_blank">
                    {{ csrf_field() }}
                    <label for="fechad">Fecha desde</label>
                    <input type="date" placeholder="Fecha desde" class="fechad" name="FechaDesde" required>
                    <label for="fechah">Fecha hasta</label>
                    <input type="date" placeholder="Fecha hasta" class="fechah" name="FechaHasta" required>
                    <div>
                        <button class="cta-find" type="submit">Consultar</button></a>
                    </div>
                </form>
            </div>
            
        </div>
    </section>
</main>
<img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
<img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
<img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">

</html>

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
                <form action="">
                    <input type="text" placeholder="Fecha desde" class="fechad">
                    <input type="text" placeholder="Fecha hasta" class="fechah">
                </form>
            </div>
            <a href="#"><button class="cta-find">Consultar</button></a>
        </div>
    </section>
</main>
<img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
<img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
<img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">

</html>

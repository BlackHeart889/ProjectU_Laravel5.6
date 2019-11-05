<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/resultados.css') !!}">
    <title>Registros</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="{{ asset('img/logo-nuevo-70.png') }}" alt="universidad">
        </div>
        <nav>
        </nav>
    </header>
    <main>
        <section class="presentation">
            <div class="introduction">
                @php
                use App\Functions\Operario\consultaIngreso;
                $consulta = new consultaIngreso();
                $consulta->Consultar($_POST['FechaDesde'], $_POST['FechaHasta']);
                @endphp
            </div>
        </section>
        <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
        <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
        <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
    </main>

</body>

</html>
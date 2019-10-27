<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/cuposDisponibles.css') !!}">
    <title>Inicio</title>
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
        <section class="presentation">
            <div class="introduction">
                <div class="intro-text">
                    @php 
                        use App\Functions\Usuario\Cupos;
                        $cupos = new Cupos();
                        Cupos::buscar($cupos);
                    @endphp 
                </div>
            </div>
        </section>
        <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
        <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
        <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
    </main>
</body>

</html>
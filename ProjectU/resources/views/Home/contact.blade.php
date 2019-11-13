<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/contact.css') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Contacto</title>
</head>

<body>
    <div class="container">
        <div class="menu">
            <ul>
                <li class="logo"><img src="{{ asset('img/logo-nuevo-70.png') }}" alt="universidad"></li>
                <li><a href="/Home/inicio">Inicio</a></li>
                <li><a href="/usuarios/login">Estudiantes</a></li>
                <li><a href="/operarios/login">Operario</a></li>
                <li><a class="contact-bnt" href="/Home/contact"><span>Contacto</span></a></li>
            </ul>
        </div>
    </div>
    <div class="contact-info">
        <div class="card">
            <i class="card-icon far fa-envelope"></i>
            <p>monrroy88960@hotmail.com</p>
            <p>danielgg2606@gmail.com</p>
            <p>divher566@gmail.com</p>
            <p>baquerochavarro@gmail.com</p>
        </div>
        <div class="card">
            <i class="card-icon fas fa-phone"></i>
            <p>Cristhian Monrroy: +57 300 5121058</p>
            <p>Daniel Gomez: +57 316 2742055</p>
            <p>Diego Velandia: +57 320 4440104</p>
            <p>Kevin Baquero: +57 322 8454325</p>
        </div>
        <div class="card">
            <i class="card-icon fas fa-map-marker-alt"></i>
            <p>Fusagasuga, COL</p>
            <p></p>
            <p></p>
            <p></p>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/home.css') !!}">
    <title>Inicio</title>
</head>

<body>
    
    <div class="container">
        <div class="menu">
            <ul>
                <li class="logo"><img src="{{ asset('img/logo-nuevo-70.png') }}" alt="universidad"></li>
                <li><a class="active" href="/Home/inicio">Inicio</a></li>
                <li><a href="/usuarios/login">Estudiantes</a></li>
                <li><a href="/operarios/login">Operario</a></li>
                <li><a class="contact-bnt" href="/Home/contact"><span>Contacto</span></a></li>
            </ul>
        </div>
        <div class="banner">
            <div class="app-text">
                <h1>Gestion de parqueadero para la <br> Universidad De Cundinamarca.</h1>
                <p>Es un software capaz de gestionar y controlar correctamente todo <br> el módulo del parqueadero de la Universidad de Cundinamarca.</p>
            </div>
            <div class="app-picture">
                <img src="{{ asset('img/kia-car.png') }}" alt="car-logo">
            </div>
        </div>
        <div class="social-icons">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</body>

</html>
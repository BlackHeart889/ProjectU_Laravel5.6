<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/logUsuario.css') !!}">
    <title>Login</title>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="logo">
                <img src="{{ asset('img/escudo_udec.png') }}" alt="">
            </div>
            <form id="usuario" action="/usuario/VerificarLogin" class="input-group" method="POST">
                {{ csrf_field() }}
                <input type="text" class="input-field" placeholder="Usuario" name="user" required>
                <input type="password" class="input-field" placeholder="Contraseña" name="pass" required>
                <input type="checkbox" class="check-box"><span>Recordar contraseña</span>
                <button type="submit" class="submit-btn">Iniciar</button>
            </form>
        </div>
    </div>
</body>

</html>
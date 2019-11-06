<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/logOperario.css') !!}">
    <title>Login</title>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="operador()">Operador</button>
                <button type="button" class="toggle-btn" onclick="admin()">Admin</button>
            </div>
            <div class="logo">
                <img src="{{ asset('img/escudo_udec.png') }}" alt="">
            </div>
            <form id="operador" action="/operario/VerificarLogin" class="input-group" method="POST">
                {{ csrf_field() }}
                <input type="text" class="input-field" placeholder="Usuario" id="user" name="user" autocomplete="none" required>
                <input type="password" class="input-field" placeholder="contraseña" id="pass" name="pass" required>
                <input type="checkbox" class="check-box"><span>Recordar contraseña</span>
                <button type="submit" class="submit-btn">Iniciar</button>
                
            </form>
            <form id="admin" action="/administrador/VerificarLogin" class="input-group" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="input-field" placeholder="Usuario" id="user" name="user_adm" autocomplete="none" required>
                    <input type="password" class="input-field" placeholder="contraseña" id="password" name="pass_adm" required>
                    <input type="checkbox" class="check-box"><span>Recordar contraseña</span>
                    <button type="submit" class="submit-btn">Iniciar</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("operador");
        var y = document.getElementById("admin");
        var z = document.getElementById("btn");
        function admin(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function operador(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
@php
    if(isset($alerta)){
        $script = '<script type="text/javascript">
                alert("'.$alerta.'");
                </script>';
        echo $script;
        unset($alerta);
    }
@endphp
</html>
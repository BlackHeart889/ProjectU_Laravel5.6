<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('css/buscarUsuario.css') !!}">
    <title>Buscar usuario</title>
</head>

<body>
    <header>
        @include('shared.navbara')
    </header>
    <main>
        <section class="presentation">
            <div class="introduction">
                <div class="intro-text">
                    <form action="/administrador/ComprobarUsuario" method="POST">
                        {{ csrf_field() }}
                        <label for="finduser">Buscar operario</label>
                        <input type="text" placeholder="Id. Operario" name="user">
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
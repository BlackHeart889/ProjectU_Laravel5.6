<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('css/agregarUsuario.css') !!}">
    <title>Administrador</title>
</head>

<body>
    <header>
        @include('shared.navbara')
    </header>
    <main>
        <div class="contenedor-formulario">
            <div class="wrap">
                <form action="/administrador/AgregarOperario" class="formulario" name="formulario" method="POST">
                    {{ csrf_field() }}
                    <div>
                        <h1>AGREGAR OPERARIO</h1>
                        <div class="input-group">
                            <label class="label" for="nombre">Nombre completo</label>
                            <input type="text" id="nombre" name="nom_operario" placeholder="Nombre" required>
                        </div>
                        <div class="input-group">
                            <label for="">Número de documento</label>
                            <input type="text" id="id_operario" name="id_operario"placeholder="0000000000" required>
                        </div>
                        <div class="input-group">
                            <label class="label" for="cargo">Cargo</label>
                            <input type="text" id="cargo" name="cargo_operario" placeholder="Cargo" required>
                        </div>
                        <div>
                            <input type="hidden" name="sesion_activa" value="true">
                        </div>
                        <input type="submit" id="btn-submit" class="submit-btn" value="Registrar">
                    </div>
                </form>
            </div>
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
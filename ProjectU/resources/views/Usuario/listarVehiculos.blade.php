<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('css/listarOperarios.css') !!}">
    <title>Listar Vehiculos</title>
</head>

<body>
    <header>
        @include('shared.navbaru')
    </header>
    <main>
        <section class="presentation">
            <div class="introduction">
                @php

                use App\Usuariolog;
                use App\Functions\Sesion;
                use App\Functions\Usuario\listarVehiculos;

                $UserSession = new Sesion();
                $usuario = $UserSession->getCurrentUser();
                $Where = ['usuario' => $usuario];
                $Usuarioslog = Usuariolog::where($Where)->get();
                $id_usuario;
                foreach ($Usuarioslog as $Usuariolog ) {
                    $lista = new listarVehiculos();
                    $lista->Listar($Usuariolog->id_usuario);
                }
                @endphp
            </div>
        </section>
            <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
            <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
            <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
    </main>
</body>

</html>
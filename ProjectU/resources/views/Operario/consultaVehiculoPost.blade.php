<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/consultaVehiculos.css') !!}">
    <title>Consulta Vehículo</title>
</head>

<body>
    <header>
        @include('shared.navbar')
    </header>
    <main>
        <section class="presentation">
            <div class="cta">
                <div class="intro-text">
                    <div class="form">
                        <form action="/operario/ConsultarVehiculoR" method="POST">
                            {{csrf_field()}}
                            @php
                            use App\Functions\Operario\consultarVehiculoForm;
                            $consultar = new consultarVehiculoForm();
                            consultarVehiculoForm::buscar($_POST['placa'],$consultar);
                            @endphp
                    </div>
                </div>
            </div>
        </section>
        <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
        <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
        <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
    </main>

</body>

</html>
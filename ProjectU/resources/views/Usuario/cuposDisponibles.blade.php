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
        @include('shared.navbaru')
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
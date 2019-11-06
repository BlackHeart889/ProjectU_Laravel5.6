<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('css/modificarUsuario.css') !!}">
    <title>Administrador</title>
</head>

<body>
    <header>
        @include('shared.navbara')
    </header>
    <main>
        <div class="contenedor-formulario">
            <div class="wrap">
                <form action="/administrador/ModificarUsuario" class="formulario" name="formulario" method="POST">
                    {{ csrf_field() }}
                    <div>
                        <div class="title">
                            <h1>MODIFICAR USUARIO</h1>
                        </div>
                        <div class="input-group">
                            <label class="label" for="nombre">Cuenta usuario</label>
                            <input type="text" id="user" name="user" placeholder="Usuario" value=@php echo $user; @endphp readonly>
                        </div>
                        <div class="input-group">
                            <label class="label" for="placa">Contraseña</label>
                            <input type="password" id="pass" name="pass" placeholder="Contraseña" value=@php echo $pass; @endphp required>
                        </div>
                        <div class="input-group">
                            <label for="">Número de documento</label>
                            <input type="text" id="id_operario" name="id_operario" placeholder="0000000000" value=@php echo $id_operario; @endphp required>
                        </div>
                        <input type="submit" id="btn-submit" class="submit-btn" value="Modificar">
                    </div>
                </form>
            </div>
            <img class="big-circle" src="{{ asset('img/big-circle.svg') }}" alt="">
            <img class="medium-circle" src="{{ asset('img/mid-circle.svg') }}" alt="">
            <img class="small-circle" src="{{ asset('img/small-circle.svg') }}" alt="">
    </main>
</body>

</html>
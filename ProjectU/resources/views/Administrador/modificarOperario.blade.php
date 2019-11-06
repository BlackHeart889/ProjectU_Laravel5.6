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
                <form action="/administrador/ModificarOperario" class="formulario" name="formulario_visitante" method="POST">
                    {{ csrf_field() }}
                    <div>
                        <h1>MODIFICAR OPERARIO</h1>
                        <div class="input-group">
                            <label class="label" for="nombre">Nombre completo</label>
                            <input type="text" id="nombre" name="nom_operario" placeholder="Usuario" value="@php echo "$nom_operario";@endphp" required>
                        </div>
                        <div class="input-group">
                            <label for="">Número de documneto</label>
                            <input type="text" id="numerod" name="id_operario" placeholder="0000000000" value="@php echo $id_operario;@endphp" required readonly>
                        </div>
                        <div class="input-group">
                            <label class="label" for="cargo">Cargo</label>
                            <input type="text" id="cargo" name="cargo_operario" placeholder="Cargo" value="@php echo $cargo_operario;@endphp" required>
                        </div>
                        <div class="input-group">
                            <label class="label" for="identificacion">¿Activo?</label>
                            <div class="input-group-select">
                                <select name="sesion_activa">
                                    @php
                                        if($sesion_activa == true){
                                            echo '<option value="true" selected>Si</option>
                                                  <option value="false">No</option>';
                                        } else{
                                            echo '<option value="true">Si</option>
                                                  <option value="false" selected>No</option>';
                                        }
                                    @endphp
                                </select>
                            </div>
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

</html>
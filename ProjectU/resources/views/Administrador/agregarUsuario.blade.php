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
        <div class="logo-container">
            <img src="{{ asset('img/university_30px.png') }}" alt="universidad">
            <h4 class="logo">Universidad De Cundinamarca</h4>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="/administrador/AgregarUsuario"> <p align="center">Crear<br>Usuario</p> </a></li>
                <li><a class="nav-link" href="/administrador/BuscarUsuario"> <p align="center">Modificar<br>Usuario</p> </a></li>
                <li><a class="nav-link" href="consultac.html"> <p align="center">Listar<br>Usuarios</p> </a></li>
                <li><a class="nav-link" href="consultac.html"> <p align="center">Agregar<br>Operario</p> </a></li>
                <li><a class="nav-link" href="consultaV.php"> <p align="center">Modificar<br>Operario</p> </a></li>
                <li><a class="nav-link" href="consultaV.php"> <p align="center">Listar<br>Operarios</p> </a></li>
                <li><a class="nav-link" href="/administrador/logout">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="contenedor-formulario">
            <div class="wrap">
                <form action="php/visitantes.php" class="formulario" name="formulario_visitante" method="POST">
                    <div>
                        <h1>AGREGAR USUARIO</h1>
                        <div class="input-group">
                            <label class="label" for="nombre">Cuenta usuario</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Usuario" required>
                        </div>
                        <div class="input-group">
                            <label class="label" for="placa">Contraseña</label>
                            <input type="password" id="placa" name="placa" placeholder="Contraseña" required>
                        </div>
                        <div class="input-group">
                            <label class="label" for="identificacion">Rol de usuario</label>
                            <div class="input-group-select">
                                <select name="tipoID">
                                    <option value="Automóvil">Operador</option>
                                    <option value="Motocicleta">Administrador</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="">Nombre completo</label>
                            <input type="text" id="colorv" name="colorv" placeholder="Nombre y Apellidos">
                        </div>
                        <div class="input-group">
                            <label for="">Número de documneto</label>
                            <input type="text" id="numerod" placeholder="0000000000">
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
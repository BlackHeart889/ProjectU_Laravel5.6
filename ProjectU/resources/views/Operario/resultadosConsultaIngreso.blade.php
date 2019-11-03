<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Registros</title>
</head>
<body>
    @php
        use App\Functions\Operario\consultaIngreso;
        $consulta = new consultaIngreso();
        $consulta->Consultar($_POST['FechaDesde'], $_POST['FechaHasta']);
    @endphp
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$mensaje}}</h1>
    <table>
        <tr>
            <td>codigo</td>
            <td>cod_carrera</td>
            <td>descrip_especialidad</td>
            <td>mencion</td>
        </tr>
    @foreach($mensaje as $value)
    <tr>
        <td>{{$value->idespecialidad}}</td>
        <td>{{$value->idcarrera}}</td>
        <td>{{$value->descripcio_especialidad}}</td>
        <td>{{$value->mencion}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>
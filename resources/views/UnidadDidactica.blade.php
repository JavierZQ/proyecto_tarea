<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$dato}}</h1>
    <table>
        <tr>
            <td>codigo</td>
            <td>cod_semestre</td>
            <td>cod_especialidad</td>
            <td>descripcion</td>
            <td>credito</td>
            <td>cod-tipo_unidad</td>
            <td>hora_t</td>
            <td>hora_p</td>
        </tr>
        @foreach($dato as $value)
        <tr>
            <td>{{$value->idunidad_didactica}}</td>
            <td>{{$value->idsementre}}</td>
            <td>{{$value->idespecialidad}}</td>
            <td>{{$value->unidad_didactica_descripcion}}</td>
            <td>{{$value->credito}}</td>
            <td>{{$value->idtipo_unidad}}</td>
            <td>{{$value->hora_t}}</td>
            <td>{{$value->hota_p}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
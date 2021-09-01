<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$datos}}</h1>
    <center>
     <table>
         <tr>
             <td>codigo</td>
             <td>nom_Carrera</td>
             <td>resulución</td>
         </tr>
         @foreach($datos as $value)
         <tr>
             <td>{{$value->idcarrera}}</td>
             <td>{{$value->carrera}}</td>
             <td>{{$value->resulucion}}</td>
         </tr>
         @endforeach
     </table>
     </center>
</body>
</html>
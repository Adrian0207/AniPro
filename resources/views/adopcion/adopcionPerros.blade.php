<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perros</title>
</head>
<body>
    <table id="myTable">
        <tr>
            <th>Nombre</th>
            <th>Raza</th>        
            
        </tr>
        @foreach($perros as $p)
            <tr>
                <td>{{$p->masnombre}}</td>
                <td>{{$p->masraza}}</td>
                <td><a href="perros/vista/{{$p->mascodigo}}"><button>Ver</button></a></td>
            </tr>
        @endforeach
        <a href="/adopcion"><button>Volver</button></a>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gatos</title>
</head>
<body>
    <table id="myTable">
        <tr>
            <th>Nombre</th>
            <th>Raza</th>        
            
        </tr>
        @foreach($gatos as $g)
            <tr>
                <td>{{$g->masnombre}}</td>
                <td>{{$g->masraza}}</td>
                <td><a href="gatos/vista/{{$g->mascodigo}}"><button>Ver</button></a></td>

            </tr>
        @endforeach

        <a href="/adopcion"><button>Volver</button></a>
    </table>
</body>
</html>
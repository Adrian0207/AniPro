<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <style>
            table, th, td {
            text-align: center;
              border-radius: 20px;
            border-collapse: collapse;
            }
            th, td {
            padding: 15px;
            border-radius:30px;
            text-align: center;
            }
            table#myTable {
              border-radius: 20px;
            width: 80%;
            background-color: #D8DDD2;
            margin: auto;
            }
            .pass{
                background-color:green;
            }
        </style>
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

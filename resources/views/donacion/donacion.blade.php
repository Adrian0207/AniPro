<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donacion</title>
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
            table#Table {
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

  <table id="Table">
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Donación</th>
                </tr>
                @foreach($donacion as $donar)
                <tr>
                        <td>{{$donar->cennombre}}</td>
                        <td>{{$donar->centelefono}}</td>
                        <td> <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><a  href="#">Donar</a></button></td>
                    </tr>
                @endforeach
                  <a href="/home"><button>Volver</button></a>
            </table>
</body>
</html>

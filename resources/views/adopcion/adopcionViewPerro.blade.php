<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mascota->masnombre }}</title>
</head>
<body>
    <div><label>Nombre: {{ $mascota->masnombre }}</label></div>
    <div><label>Raza: {{ $mascota->masraza }}</label></div>
    <div><label>Género: {{ $mascota->masgenero }}</label></div>
    <div><label>Edad: {{ $mascota->masedad }}</label></div>
    <div><label>Descripción: {{ $mascota->masdescripcion }}</label></div>
    
    <form action="/perros" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="perro" value="TIP-3263">
        <button>Volver</button>
    </form>
   
   

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/perros" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="perro" value="TIP-3263">
        <button>Perros</button>
    </form>
    
    <form action="/gatos" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="gato" value="TIP-4098">
        <button>Gatos</button>
    </form>
    
</body>
</html>
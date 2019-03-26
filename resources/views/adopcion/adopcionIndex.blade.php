<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adoptar</title>

</head>
<style media="screen">

  .im{
    width: 300px;
    height: 100px;
    margin-left: 45%;
    margin-top: 100px;
    margin-bottom: 50px;
  }
  .imT{
    width: 300px;
    height: 100px;
    margin-left: 45%;
    margin-top: 200px;
    margin-bottom: 50PX;
  }
  #perro{
    width: 70%;
    height: 30px;
    cursor: pointer;
    border-radius: 15px;
    background-color: #F7C612;
  }
  #perro:hover{
    background-color: #BF9805;
  }
  #gato{
    width: 70%;
    height: 30px;
    cursor: pointer;
    border-radius: 15px;
    background-color: #F7C612;
  }
  #gato:hover{
    background-color: #BF9805;
  }
</style>
<body>
  <a href="/home"><button>Volver</button></a>
  <div class="im">
      <img src="../images/perros.png" width="200px" height="200px" alt="">

    <form action="/perros" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="perro" value="TIP-3263">
        <button id="perro">Perros</button>
    </form>
    </div>
    <div class="imT">
        <img src="../images/gatos.png" width="200px" height="200px" alt="">
    <form action="/gatos" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="gato" value="TIP-4098">
        <button id="gato">Gatos</button>
    </form>
    </div>
</body>
</html>

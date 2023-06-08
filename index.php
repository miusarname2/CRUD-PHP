<?php
require('./logic/connection.php');

$operacion= new DbInteraction("https://6480fa30f061e6ec4d4a21b7.mockapi.io/Tablacompleta");

$result=$operacion->putData(24);

print_r($result);


?>

<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/stlye.css">
    <title>Document</title>
    <style>
.header {
  border: 1px solid black;
  padding: 10px;
}
.input-group {
  width: 50%;
  float: left;
}   
.column {
  margin-bottom: 10px;
}
</style>
</head>
<body>
<div class="header">
  <form action="./logic/logic.php" method="POST">
    <div class="input-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="Nombre" required placeholder="Ingresa tu nombre">
    </div>
    <div class="input-group">
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="Apellido" required placeholder="Ingresa tu apellido">
    </div>
    <div class="input-group">
      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="Direccion" required placeholder="Ingresa tu dirección">
    </div>
    <div class="column">
      <div class="input-group">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="Edad" required placeholder="Ingresa tu edad">
      </div>
    </div>
    <div class="column">
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="Email" required placeholder="Ingresa tu Email">
      </div>
    </div>
    <div class="column">
      <div class="input-group">
        <tr>Campuslands
      </div>
    </div>
</div>

    <div class="hero">
        <input type="time" name="Hora de Entrada" require placeholder="Ingresa tu Hora de entrada">
        <input type="text" name="Team" placeholder="Ingresa tu team">
        <input type="text" name="cc" placeholder="Ingresa tu identificacion personal">
        <input type="text" name="Trainer" placeholder="Ingresa tu trainer">
        <input type="submit" value="save" name="Oper">
        <input type="submit" value="delete" name="Oper">
        <input type="submit" value="Edit" name="Oper">
        <input type="submit" value="search" name="Oper">
    </div>
    </form>
</body>
</html>
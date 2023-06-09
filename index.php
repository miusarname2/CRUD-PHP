<?php
 require('./logic/db/connection.php');

 $operacion= new DbInteraction("https://6480fa30f061e6ec4d4a21b7.mockapi.io/Tablacompleta");

 $hola = $operacion -> getData();
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
./* Set the width of the columns */
.column {
  width: 50%;
}

/* Set the left column to contain the name, surname, address, entry time, team, and trainer inputs */
.left-column {
  float: left;
}

/* Set the right column to contain the other inputs */
.right-column {
  float: right;
}

/* Set the submit type inputs to be in two subcolumns within the right column */
.right-column .button-row {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}


</style>
</head>
<body>
<div class="header">
  <form action="./logic/logic.php" method="POST">
    <div class="input-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre"  placeholder="Ingresa tu nombre" value=<?php isset($_GET["nombre"])?print_r($_GET["nombre"]):""?>>
    </div>
    <div class="input-group">
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="Apellido"  placeholder="Ingresa tu apellido" value=<?php isset($_GET["Apellido"])?print_r($_GET["Apellido"]):""?>>
    </div>
    <div class="input-group">
      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="Direccion" placeholder="Ingresa tu dirección" value=<?php isset($_GET["Direccion"])?print_r($_GET["Direccion"]):""?>>
    </div>
    <div class="column">
      <div class="input-group">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="Edad"  placeholder="Ingresa tu edad" value=<?php isset($_GET["Edad"])?print_r($_GET["Edad"]):""?>>
      </div>
    </div>
    <div class="column">
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="Email"  placeholder="Ingresa tu Email" value=<?php isset($_GET["Email"])?print_r($_GET["Email"]):""?>>
      </div>
    </div>
    <div class="column">
      <div class="input-group">
        <tr>Campuslands
      </div>
    </div>
    <div class="column">
      <div class="input-group">
      <div class="col-right">
      <div class="button-row">
        <input type="submit" value="save" name="Oper" >
        <input type="submit" value="delete" name="Oper">
      </div>
      <div class="button-row">
        <input type="submit" value="Edit" name="Oper">
        <input type="submit" value="search" name="Oper">
      </div>
    </div>
      </div>
    </div>
    <div class="column">
      <div class="input-group">
        <label for="HoraEntrada">Hora de llegada:</label>
        <input type="time" name="HoraEntrada" require placeholder="Ingresa tu Hora de entrada" value=<?php isset($_GET["HoraEntrada"])?print_r($_GET["HoraEntrada"]):""?>>
      </div>
    </div><br>
    <input type="text" required name="Cedula" placeholder="Ingresa tu identificacion personal" value=<?php isset($_GET["Cedula"])?print_r($_GET["Cedula"]):""?> ><br><br>
        <input type="text" name="Team" placeholder="Ingresa tu team" value=<?php isset($_GET["Team"])?print_r($_GET["Team"]):""?>><br>
        <input type="text" name="Trainer" placeholder="Ingresa tu trainer" value=<?php isset($_GET["Trainer"])?print_r($_GET["Trainer"]):""?>>


    <input style="visibility: hidden;">

    

</div>
  </div>
</div>

    </form>


    <table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Direccion</th>
      <th>Edad</th>
      <th>Email</th>
      <th>Hora de entrada</th>
      <th>Team</th>
      <th>Cedula</th>
      <th>Trainer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($hola as $item) {?>
    <tr>
      <td><?php print_r($item['nombre'] . PHP_EOL);?></td>
      <td><?php print_r($item['Apellido'] . PHP_EOL);?></td>
      <td><?php print_r($item['Direccion'] . PHP_EOL);?></td>
      <td><?php print_r($item['Edad'] . PHP_EOL);?></td>
      <td><?php print_r($item['Email'] . PHP_EOL);?></td>
      <td><?php print_r($item['HoraEntrada'] . PHP_EOL);?></td>
      <td><?php print_r($item['Team'] . PHP_EOL);?></td>
      <td><?php print_r($item['Cedula'] . PHP_EOL);?></td>
      <td><?php print_r($item['Trainer'] . PHP_EOL);?></td>
      <td><form  action="./logic/logic.php" method="POST" >
      <input type="text" required name="Cedula" style="display: none;" placeholder="Ingresa tu identificacion personal" value=<?php print_r($item['Cedula']);?>>
      <input type="submit" value="search" name="Oper">
</form></td>
    </tr>
    <?php }?>
  </tbody>
</table>

</body>
</html>
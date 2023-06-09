<?php
require('./db/connection.php');

$operacion= new DbInteraction("https://6480fa30f061e6ec4d4a21b7.mockapi.io/Tablacompleta");
print_r($_POST);

if ($_POST["Oper"] == "save"){
    $getInfo = $operacion->getUserData($_POST["Cedula"]);
    if (isset($getInfo)) {
    array_pop($_POST);
    $save=$operacion->putData($_POST,$getInfo["id"]);
    }else{
    array_pop($_POST);
    $save=$operacion->postData($_POST);
    }
}elseif($_POST["Oper"] == "delete"){
    $delete = $operacion->deleteData($_POST["Cedula"]);
}elseif($_POST["Oper"] == "Edit"){
    $getInfo = $operacion->getUserData($_POST["Cedula"]);
    header("Location:../index.php?nombre=".$getInfo["nombre"]."&Apellido=".$getInfo["Apellido"]."&Direccion=".$getInfo["Direccion"]."&Edad=".$getInfo["Edad"]."&Email=".$getInfo["Email"]."&HoraEntrada=".$getInfo["HoraEntrada"]."&Team=".$getInfo["Team"]."&Cedula=".$getInfo["Cedula"]."&Trainer=".$getInfo["Trainer"]);
}

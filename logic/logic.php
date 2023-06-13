<?php
require('db/connection.php');

$operacion= new DbInteraction("https://6480fa30f061e6ec4d4a21b7.mockapi.io/Tablacompleta");


if ($_POST["Oper"] == "save"){
    $getInfo = $operacion->getUserData($_POST["Cedula"]);
    if (isset($getInfo["id"])) {
    array_pop($_POST);
    $operacion->putData($_POST,$getInfo["id"]);
    header("Location:../index.php");
    }else{
    $operacion->postData($_POST);
    header("Location:../index.php");
    }
}elseif($_POST["Oper"] == "delete"){
    $operacion->deleteData($_POST["Cedula"]);
    header("Location:../index.php");
}elseif($_POST["Oper"] == "Edit" || $_POST["Oper"] == "search"){
    $getInfo = $operacion->getUserData($_POST["Cedula"]);
    header("Location:../index.php?nombre=".$getInfo["nombre"]."&Apellido=".$getInfo["Apellido"]."&Direccion=".$getInfo["Direccion"]."&Edad=".$getInfo["Edad"]."&Email=".$getInfo["Email"]."&HoraEntrada=".$getInfo["HoraEntrada"]."&Team=".$getInfo["Team"]."&Cedula=".$getInfo["Cedula"]."&Trainer=".$getInfo["Trainer"]);
}else{
    echo "Error";
}

function obtenerData(){
    $hello = $operacion->getData();

    return $hello;
}


<?php
require('./db/connection.php');

$operacion= new DbInteraction("https://6480fa30f061e6ec4d4a21b7.mockapi.io/Tablacompleta");
print_r($_POST);

if ($_POST["Oper"] == "save"){
    array_pop($_POST);
    $save=$operacion->postData($_POST);
}
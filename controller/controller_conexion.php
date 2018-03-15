<?php

require '../model/conexion.php';
$clase=new conexion();

$name=$_POST['nombre'];
//echo("tu nombre es   ".$name);
$conexion=$clase->conecta();
?>
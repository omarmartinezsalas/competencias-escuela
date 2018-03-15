<?php
require '../model/atributo.php';

if(!isset($_GET['accion']))
{
	$accion='ver';
}else
{
$accion=$_GET['accion'];
}




switch($accion)
{
	case 'agregar':
	
	$clave=$_POST['clave'];
	$descripcion=$_POST['descripcion'];
	


	$atributo=new atributo();
	$atributo->nueva($descripcion,$clave);
	header ("Location: ../vista/registro_atributos.php");
	break;


	

	case 'borrar':

	$clave=$_GET['clave'];
	$atributo=new atributo();
	$atributo->borrar($clave);
	header ("Location: ../vista/registro_atributos.php");
	break;

	case 'ver':
	$atributo=new atributo();
	$consulta=$atributo->vertodo();


	echo"<table border='1'><th>Descripcion</th><th>Categoria</th>";

	 while ($row = mysqli_fetch_row($consulta)) {
	 			echo"<tr><td>{$row[1]}</td><td>{$row[2]}</td><td><a href='../controller/controller_atributo.php?accion=borrar&clave={$row[0]}'>eliminar</a></td></tr>";
                
           }
           echo"</table>";
	break;

	case 'prueba':
	echo "hola";	
	break;


}


?>
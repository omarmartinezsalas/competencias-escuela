<?php
require '../model/grupo.php';



$accion=$_GET['accion'];



switch($accion)
{
	case 'agregar':
	
	$clave=$_POST['clave'];
	$turno=$_POST['turno'];
	$carrera=$_POST['carrera'];
	$ciclo=$_POST['ciclo'];
	$clase_pro=new grupo();
	$num=$clase_pro->nueva($clave,$turno,$carrera,$ciclo);
	
	echo "{$num}";
	if ($num>=1) 
	{
		echo "<h1>Registrado</h1>";
	}else
	{
		echo "<h1>Error: no registrado</h1>";
	}
	
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/registro_grupo.php";';
	echo '</script>';
	break;


	

	case 'borrar':

	$clave=$_GET['clave'];
	$clase_pro=new competencia_profesional();
	$clase_pro->borrar($clave);
	//header ("Location: ../vista/competencias_profesionales.php");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/competencias_profesionales.php";';
	echo '</script>';
	break;

	case 'set':
	$clase_profesor=new profesor();
	$clase_profesor->set($_POST['clave'],$_POST['nombre'],$_POST['a_paterno'],$_POST['a_materno'],$_POST['correo'],$_POST['contraseña']);
	

	$consulta=$clase_profesor->vertodo();
	echo"   {$_POST['clave']}  <br>";
	echo"   {$consulta[1]}  <br>";
	echo"   {$consulta[2]}  <br>";
	echo"   {$consulta[3]}  <br>";
	echo"   {$consulta[4]}  <br>";
	echo"   {$consulta[5]}  <br>";
	break;




}


?>
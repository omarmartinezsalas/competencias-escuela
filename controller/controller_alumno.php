<?php
require '../model/alumno.php';



$accion=$_GET['accion'];



switch($accion)
{
	case 'agregar':
	
	$clave=$_POST['clave'];
	$nombre=$_POST['nombre'];
	$a_paterno=$_POST['a_paterno'];
	$a_materno=$_POST['a_materno'];
	$sexo=$_POST['sexo'];
	$fecha=$_POST['fecha'];
	$grupo=$_POST['grupo'];

	$clase_pro=new alumno();
	$clase_pro->nueva($clave,$nombre,$a_paterno,$a_materno,$sexo,$fecha,$grupo);
	
	header ("Location: ../vista/registro_alumno.php");
	break;


	

	case 'borrar':

	$clave=$_GET['clave'];
	$clase_pro=new competencia_profesional();
	$clase_pro->borrar($clave);
	header ("Location: ../vista/competencias_profesionales.php");
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
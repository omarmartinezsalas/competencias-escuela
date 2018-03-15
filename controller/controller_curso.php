<?php
require '../model/curso.php';



$accion=$_GET['accion'];



switch($accion)
{
	case 'agregar':
	
	$grupo=$_POST['grupo'];
	$materia=$_POST['materia'];
	$profesor=$_POST['profesor'];
	$clase_pro=new curso();
	$curso_nuevo=$clase_pro->nueva($materia,$grupo,$profesor);
	$criterios=$clase_pro->criterios($curso_nuevo);

	$clase_pro->evaluacion(1,'examen',$curso_nuevo);
	$clase_pro->evaluacion(1,'tutoria',$curso_nuevo);
	$clase_pro->evaluacion(1,'orientacion',$curso_nuevo);
	$clase_pro->evaluacion(1,'extra',$curso_nuevo);

	$clase_pro->evaluacion(2,'examen',$curso_nuevo);
	$clase_pro->evaluacion(2,'tutoria',$curso_nuevo);
	$clase_pro->evaluacion(2,'orientacion',$curso_nuevo);
	$clase_pro->evaluacion(2,'extra',$curso_nuevo);

	$clase_pro->evaluacion(3,'examen',$curso_nuevo);
	$clase_pro->evaluacion(3,'tutoria',$curso_nuevo);
	$clase_pro->evaluacion(3,'orientacion',$curso_nuevo);
	$clase_pro->evaluacion(3,'extra',$curso_nuevo);
	//header ("Location: ../vista/registro_curso.php");
	if (isset($curso_nuevo)) 
	{
		echo"<strong>Registro exitoso</strong> Curso {$curso_nuevo} creado.";
	}
	else
	{
		echo"<strong> Error </strong> Ocurrio un error inesperado. ";	
	}

	break;


	

	case 'borrar':

	$clave=$_GET['clave'];
	$cpro=new curso();
	$cpro->borrar($clave);
	header ("Location: ../controller/sesion.php?accion=deselecciona");

	
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
<?php
require '../model/materia.php';


if (!isset($_GET['accion'])) 
{
	echo "Error";
	exit();
}
$accion=$_GET['accion'];



switch($accion)
{
	case 'agregar':
	
	$clave=$_POST['clave'];
	$nombre=$_POST['nombre'];
	$creditos=$_POST['creditos'];
	
	$materia=new materia();
	$resultado=$materia->nueva($clave,$nombre,$creditos);
	if ($resultado>0) 
	{
		echo "<h1>Registrado correctamente</h1>";
		echo '<script type="text/javascript">';
		echo 'window.location.href="../vista/registro_materia.php";';
		echo '</script>';
		# code...
	}else
	{
		echo "Error";
	}
	
	break;

	case 'editar':
	$clave_old=$_POST['clave_old'];
	$clave=$_POST['clave'];
	$nombre=$_POST['nombre'];
	$creditos=$_POST['creditos'];
	echo "si";
	$materia=new materia();
	$resultado=$materia->editar($clave_old,$clave,$nombre,$creditos);
	if ($resultado>0) 
	{
		echo "<h1>Registrado correctamente</h1>";
		echo '<script type="text/javascript">';
		echo 'window.location.href="../vista/adm_materias.php";';
		echo '</script>';
		# code...
	}else
	{
		echo "Error";
		echo "<a href='../vista/adm_materias.php'>regresar</a>";
	}
	
	break;

	
	default:
	
	exit();
	break;

	



}


?>
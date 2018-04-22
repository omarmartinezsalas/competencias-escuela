<?php
require '../model/actividad.php';
require '../model/competencia_actividad.php';


$accion=$_GET['accion'];



switch($accion)
{
	case 'agregar':
	$descripcion=$_POST['descripcion'];
	$clave=$_POST['clave'];
	$fecha=$_POST['fecha'];
	$parcial=$_POST['parcial'];
	$clase_pro=new actividad();
	$actividad=$clase_pro->nueva($descripcion,$clave,$fecha,$parcial);
	echo "actividad= {$actividad}<br>";
	$add_competencias=new competencia_actividad();

	if (isset($_POST['generica']) && !empty($_POST['generica'])) 
	{
		$guno=$_POST['generica'];
		$c1= intval(substr($guno, 6));
		
		echo "{$c1}-gen1<br>";
		$resul1=$add_competencias->competencia_actividad_generica($clave,$c1,$actividad);
		echo "-{$resul1}-<br>";
	}
	if (isset($_POST['generica2']) && !empty($_POST['generica2'])) 
	{
		$gdos=$_POST['generica2'];
		
		$c2= intval(substr($gdos, 6));
		echo "{$c2}gen2";
		$resul2=$add_competencias->competencia_actividad_generica($clave,$c2,$actividad);
		echo "-{$resul2}-<br>";
	}
	if (isset($_POST['generica3']) && !empty($_POST['generica3'])) 
	{
		$g3=$_POST['generica3'];
		$c3= intval(substr($g3, 6));
		echo "{$c3}<br>gen3";
		$resul3=$add_competencias->competencia_actividad_generica($clave,$c3,$actividad);
		echo "-{$resul3}-<br>";
	}
//-------------------------
	if (isset($_POST['diciplinar']) && !empty($_POST['diciplinar'])) 
	{
		$d1=$_POST['diciplinar'];
		echo "{$d1}<br>di1";
		$resul4=$add_competencias->competencia_actividad_diciplinar($clave,$d1,$actividad);
		echo "-{$resul4}-";
	}
	if (isset($_POST['diciplinar2']) && !empty($_POST['diciplinar2'])) 
	{
		$d2=$_POST['diciplinar2'];
		echo "{$d2}<br>di2";
		$resul5=$add_competencias->competencia_actividad_diciplinar($clave,$d2,$actividad);
		echo "-{$resul5}-";
	}
//----------------------------------
	if (isset($_POST['profesional']) && !empty($_POST['profesional'])) 
	{
		$p1=$_POST['profesional'];echo "{$p1}<br>pro1";
		$resul6=$add_competencias->competencia_actividad_profesional($clave,$p1,$actividad);
	}
	if (isset($_POST['profesional2']) && !empty($_POST['profesional2'])) 
	{
		$p2=$_POST['profesional2'];echo "{$p2}<br>pro2";
		$resul7=$add_competencias->competencia_actividad_profesional($clave,$p2,$actividad);
	}

	//header ("Location: ../vista/regstro_actividad.php");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/regstro_actividad.php";';
	echo '</script>';
	break;

	


	case 'borrar':
	$clave=$_GET['clave'];
	$act=new actividad();
	$act->borrar($clave);
	//header ("Location: ../vista/regstro_actividad.php");
	//header('Location:' . getenv('HTTP_REFERER'));
	echo '<script type="text/javascript">';
	echo 'window.history.go(-1);';
	echo '</script>';
	break;

	case 'calificar':
	$calificacion=$_POST['calificacion'];
	$clave_entrega=$_GET['entrega'];
	$act=new actividad();
	$act->calificar_actividad($clave_entrega,$calificacion);
	//header ("Location: ../vista/regstro_actividad.php");
	//header('Location:' . getenv('HTTP_REFERER'));
	//echo "calificado";
	echo '<script type="text/javascript">';
	echo 'window.history.go(-1);';
	echo '</script>';
	break;
	default:
		echo '<script type="text/javascript">';
		echo 'window.location.href="http://www.facebook.com";';
		echo '</script>';	
	break;



}


?>
<?php
session_start();
require '../model/competencia_generica.php';
require '../model/competencia_diciplinar.php';
require '../model/competencia_profesional.php';

$accion=$_GET['accion'];

switch ($accion) 
{
	case 'agregar_generica'://agrega competencia generica
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$generica=new competencia_generica();
		$generica->agregar_competencia_curso($curso,$competencia,$parcial);
		echo "{$competencia}---{$curso}";
		//header ("Location: ../vista/competencias_genericas.php");
		echo '<script type="text/javascript">';
		echo 'window.location.href="../vista/competencias_genericas.php";';
		echo '</script>';
		break;
	case 'agregar'://agrega competencia disciplinar
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$diciplinar=new competencia_diciplinar();
		$diciplinar->agregar_competencia_curso($curso,$competencia,$parcial);
		echo "{$competencia}---{$curso}";
		//header ("Location: ../vista/competencias_diciplinares.php");
		echo '<script type="text/javascript">';
		echo 'window.location.href="../vista/competencias_diciplinares.php";';
		echo '</script>';
		break;
	case 'agregar2'://agrega competencia profesional
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$profesional=new competencia_profesional();
		$profesional->agregar_competencia_curso($curso,$competencia,$parcial);
		echo "{$competencia}---{$curso}";
		//header ("Location: ../vista/competencias_profesionales.php");
		echo '<script type="text/javascript">';
		echo 'window.location.href="../vista/competencias_profesionales.php";';
		echo '</script>';
		break;
	case 'eliminar_profesional':
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$profesional=new competencia_profesional();
		$profesional->eliminar_competencia_curso($curso,$competencia,$parcial);
		//echo "{$competencia}---{$curso}";
		if (isset($_GET['page_competencias']))
		{
				//header ("Location: ../vista/competencias_profesionales.php");
				echo '<script type="text/javascript">';
				echo 'window.location.href="../vista/competencias_profesionales.php";';
				echo '</script>';
		}
		else
		{
				//header ("Location: ../vista/manager_curso.php");
				echo '<script type="text/javascript">';
				echo 'window.location.href="../vista/manager_curso.php";';
				echo '</script>';		
		}
		break;
	case 'eliminar_diciplinar':
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$diciplinar=new competencia_diciplinar();
		$diciplinar->eliminar_competencia_curso($curso,$competencia,$parcial);
		//echo "{$competencia}---{$curso}";
		if (isset($_GET['page_competencias']))
		{
				//header ("Location: ../vista/competencias_diciplinares.php");
				echo '<script type="text/javascript">';
				echo 'window.location.href="../vista/competencias_diciplinares.php";';
				echo '</script>';			
		}
		else
		{
				//header ("Location: ../vista/manager_curso.php");
				echo '<script type="text/javascript">';
				echo 'window.location.href="../vista/manager_curso.php";';
				echo '</script>';
		}

		
		break;
		case 'eliminar_generica':
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$generica=new competencia_generica();
		$gen=new competencia_generica();

		$generica->eliminar_competencia_curso($curso,$competencia,$parcial);
		//$gen->eliminar_competencia_actividad($curso,$competencia);
		
		//echo "{$competencia}---{$curso}";
		if (isset($_GET['page_competencias']))
		{
				//header ("Location: ../vista/competencias_genericas.php");
				echo '<script type="text/javascript">';
				echo 'window.location.href="../vista/competencias_genericas.php";';
				echo '</script>';
		}
		else
		{
				//header ("Location: ../vista/manager_curso.php");
				echo '<script type="text/javascript">';
				echo 'window.location.href="../vista/manager_curso.php";';
				echo '</script>';
		}
	
		break;


	default:
		
		break;
}

?>
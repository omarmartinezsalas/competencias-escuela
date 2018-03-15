<?php
session_start();
require '../model/competencia_generica.php';
require '../model/competencia_diciplinar.php';
require '../model/competencia_profesional.php';

$accion=$_GET['accion'];

switch ($accion) 
{
	case 'agregar_generica':
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$generica=new competencia_generica();
		$generica->agregar_competencia_curso($curso,$competencia,$parcial);
		echo "{$competencia}---{$curso}";
		header ("Location: ../vista/competencias_genericas.php");
		break;
	case 'agregar':
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$diciplinar=new competencia_diciplinar();
		$diciplinar->agregar_competencia_curso($curso,$competencia,$parcial);
		echo "{$competencia}---{$curso}";
		header ("Location: ../vista/competencias_diciplinares.php");
		break;
	case 'agregar2':
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$profesional=new competencia_profesional();
		$profesional->agregar_competencia_curso($curso,$competencia,$parcial);
		echo "{$competencia}---{$curso}";
		header ("Location: ../vista/competencias_profesionales.php");
		break;
	case 'eliminar_profesional':
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$profesional=new competencia_profesional();
		$profesional->eliminar_competencia_curso($curso,$competencia,$parcial);
		echo "{$competencia}---{$curso}";
		header ("Location: ../vista/manager_curso.php");
		break;
	case 'eliminar_diciplinar':
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$diciplinar=new competencia_diciplinar();
		$diciplinar->eliminar_competencia_curso($curso,$competencia,$parcial);
		echo "{$competencia}---{$curso}";
		header ("Location: ../vista/manager_curso.php");
		break;
		case 'eliminar_generica':
		$competencia=$_GET['clave'];
		$curso=$_SESSION['curso'];
		$parcial=$_SESSION['parcial'];
		$generica=new competencia_generica();
		$generica->eliminar_competencia_curso($curso,$competencia,$parcial);
		echo "{$competencia}---{$curso}";
		header ("Location: ../vista/manager_curso.php");
		break;


	default:
		
		break;
}

?>
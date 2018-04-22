<?php
require '../model/profesor.php';
require 'select_competencias.php';

//session_start();
$accion=$_GET['accion'];
//if(isset($_SESSION['clave']) && $accion=='selecciona_curso')
//{
//	$curso=$_POST['curso'];
//	$_SESSION['curso']=$curso;
//	header ("Location: ../vista/competencias_diciplinares.php");	
//}
//if(isset($_SESSION['clave']))
//{
//	header ("Location: ../vista/competencias_diciplinares.php");	
//}

switch($accion)
{
	case'iniciar_sesion':

	$correo=$_POST['correo'];
	$contrasena=$_POST['contrasena'];
	$profesor= new profesor();
	$resultado=	$profesor->verificar($correo,$contrasena);
	if($resultado!='0')
	{
		$datos=$profesor->correo($correo);
		while($ro = mysqli_fetch_row($datos)) 
		{
			$_SESSION['clave']=$ro[0];
			$_SESSION['nombre']=$ro[1];
			$_SESSION['a_paterno']=$ro[2];
			$_SESSION['a_materno']=$ro[3];
			$_SESSION['correo']=$ro[4];
			//$_SESSION['competencias']=new selector();
			$_SESSION['imagen']=$ro[6];
			$_SESSION['rol']=$ro[7];//administrador o usuario normal	
        }
		//header ("Location: ../vista/wellcome.php");
		if ($_SESSION['rol']=='normal') 
		{
			echo '<script type="text/javascript">';
			echo 'window.location.href="../vista/wellcome.php";';
			echo '</script>';
		}elseif ($_SESSION['rol']=='administrador') 
		{
			echo '<script type="text/javascript">';
			echo 'window.location.href="../vista/admin.php";';
			echo '</script>';	
		}
		
	}
	else
	{
		echo "error de sesion";
		//header ("Location: ../vista/iniciar_sesion.php");
		echo '<script type="text/javascript">';
		echo 'window.location.href="../vista/iniciar_sesion.php";';
		echo '</script>';
	}
	break;

	case'cerrar_sesion':
	session_unset();

	//header ("Location: ../index.html");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../index.html";';
	echo '</script>';

	break;
	case'selecciona_curso':
	$curso=$_GET['curso'];
	$parcial=$_GET['p'];

	$materia=$_GET['materia'];
	$grupo=$_GET['grupo'];

	$_SESSION['curso']=$curso;
	$_SESSION['parcial']=$parcial;	
	$_SESSION['materia']=$materia;
	$_SESSION['grupo']=$grupo;
	//header ("Location: ../vista/manager_curso.php");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/manager_curso.php";';
	echo '</script>';
	break;
	case'actividades_curso':
	$curso=$_GET['curso'];
	$parcial=1;

	$materia=$_GET['materia'];
	$grupo=$_GET['grupo'];

	$_SESSION['curso']=$curso;
	$_SESSION['parcial']=$parcial;
	$_SESSION['materia']=$materia;
	$_SESSION['grupo']=$grupo;
	//header ("Location: ../vista/actividades_curso.php");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/actividades_curso.php";';
	echo '</script>';
	break;
	case'deselecciona':
	

	unset($_SESSION['curso']);
	unset($_SESSION['parcial']);
	unset($_SESSION['materia']);
	unset($_SESSION['grupo']);

	//header ("Location: ../vista/wellcome.php");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/wellcome.php";';
	echo '</script>';
	break;

	case'ruta_foto':
	$ruta=$_GET['ruta'];
	$_SESSION['imagen']=$ruta;
	//header ("Location: ../vista/editar_perfil.php");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/editar_perfil.php";';
	echo '</script>';
	break;
}









?>
<?php
require '../model/competencia_diciplinar.php';


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
	$categoria=$_POST['categoria'];
	$nivel=$_POST['nivel'];

	$clase_diciplinar=new competencia_diciplinar();
	$clase_diciplinar->nueva($clave,$descripcion,$categoria,$nivel);
	header ("Location: ../vista/competencias_diciplinares.php");
	break;


	

	case 'borrar':

	$clave=$_GET['clave'];
	$clase_diciplinar=new competencia_diciplinar();
	$clase_diciplinar->borrar($clave);
	header ("Location: ../vista/competencias_diciplinares.php");
	break;

	case 'ver':
	$clase_diciplinar=new competencia_diciplinar();
	$consulta=$clase_diciplinar->vertodo();

	echo"<table border='1' class='table table-striped table-responsive-md' id='tabla'>
	<thead>
	<tr style='background-color:#009999;'>
	<th>CLave</th>
	<th>Descripcion</th>
	<th>Categoria</th>
	<th>nivel</th>
	<th>accion</th>
	</tr>
	</thead>
	<tbody>";
	while ($row = mysqli_fetch_row($consulta)) {
                echo"<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td><a href='../controller/select_competencias.php?accion=agregar&clave={$row[0]}'><button class='btn btn-success'><span class='icon-folder-plus'></span></button></a></td></tr>";
            }	
            echo"</tbody></table>";


	break;
	case 'ver_competencia_diciplinar':
	

	break;

	case 'buscar':
		$cla=$_GET['clave'];
		$generica=new competencia_diciplinar();
		$consulta=$generica->buscar($cla);
		
		while ($fila = mysqli_fetch_row($consulta))
        {
           echo("Competencia: <br>{$fila[0]}<br><br>Categoria: <br>{$fila[1]}");
            
        }
	break;



}


?>
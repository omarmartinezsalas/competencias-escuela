<?php
require '../model/competencia_generica.php';

if(!isset($_GET['accion']))
{
	$accion='listar';
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


	$clase_generica=new competencia_generica();
	$clase_generica->nueva($clave,$descripcion,$categoria);
	//header ("Location: ../vista/competencias_genericas.php");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/competencias_genericas.php";';
	echo '</script>';
	break;

	case 'borrar':
	$clave=$_GET['clave'];
	$clase_generica=new competencia_generica();
	$clase_generica->borrar($clave);
	//header ("Location: ../vista/competencias_genericas.php");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/competencias_genericas.php";';
	echo '</script>';
	break;

	case 'ver':
	$clase_generica=new competencia_generica();
	$consulta=$clase_generica->vertodo();
	$i=0;
	$array = array();
	
	while ($roow = mysqli_fetch_row($consulta))
	{
		$array[$i]=['clave'=>$roow[0],'des'=>$roow[1],'cat'=>$roow[2]];	
		$i=$i+1;
	}
	//echo"<table border='1'><th>CLave</th><th>Descripcion</th><th>Categoria</th>";

	 //while ($row = mysqli_fetch_row($consulta)) {
	 //			echo"<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td><a href='../controller/controller_generica.php?accion=borrar&clave={$row[0]}'>eliminar</a></td></tr>";
                
      //     }
       //    echo"</table>";

	//echo json_encode($array);
	echo json_encode($array);//segundo parametro opcional: ,JSON_FORCE_OBJECT
	break;


	/*case 'listar'://metodo trasladado a controller/mostrar_competencias.php
	$clase_generica=new competencia_generica();
	$consulta=$clase_generica->ver_competencias();
	$i=0;
	$array = array();
	
	while ($roow = mysqli_fetch_row($consulta))
	{
  		$atributo=$clase_generica->ver_atributos($roow[0]);
  		echo"<table class='table table-striped' border='3'><tr style='background-color:#009999;'><th>{$roow[1]}</th><th>{$roow[2]}</th></tr>";
  		while ($r=mysqli_fetch_row($atributo)) 
  		{
  			echo"
    		<tr>
    			<td>{$r[0]}.-{$r[1]}</td>
    		<td>
    		<a href='../controller/select_competencias.php?accion=agregar_generica&clave={$r[0]}'>
    		<button class='btn btn-success'><span class='icon-folder-plus'></span></button></a></td></tr>
  			";
  		}
  		echo"</table>";
		//$array[$i]=['clave'=>$roow[0],'des'=>$roow[1],'cat'=>$roow[2]];	
		//$i=$i+1;
	}
	break;*/

	case 'buscar':
		$cla=$_GET['clave'];
		$generica=new competencia_generica();
		$consulta=$generica->buscar($cla);
		
		while ($fila = mysqli_fetch_row($consulta))
        {
           echo("Atributo: <br>{$fila[0]}<br><br>Competencia: <br>{$fila[1]}");
            
        }
	break;

	case '':
		$cla=$_GET['clave'];
		$generica=new competencia_generica();
		$consulta=$generica->buscar($cla);
		
		while ($fila = mysqli_fetch_row($consulta))
        {
           echo("Competencia: <br>{$fila[0]}<br>Categoria: <br>{$fila[1]}");
            
        }
	break;

	case 'prueba':
	echo "hola";	
	break;


}


?>
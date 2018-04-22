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
	
	//header ("Location: ../vista/registro_alumno.php");
	echo '<script type="text/javascript">';
	echo 'window.location.href="../vista/registro_alumno.php";';
	echo '</script>';
	break;
	
	case 'borrar':

	$clave=$_GET['clave'];
	$clase_pro=new competencia_profesional();
	$clase_pro->borrar($clave);
	//header ("Location: ../vista/competencias_profesionales.php");
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

	case 'agregar_csv':
	
	
	$grupo=$_POST['grupo'];

	 echo $filename=$_FILES["archivo"]["name"];
	 echo"<br>";
	 echo $filename=$_FILES["archivo"]["tmp_name"];
	 echo"<br>";
	 echo $filename=$_FILES["archivo"]["size"];
	 echo"<br>";
	 echo $filename=$_FILES["archivo"]["type"];
	 echo"<br>";
	 echo $filename=$_FILES["archivo"]["error"];
	 $nombre=$_FILES["archivo"]["name"];
	 $t_nombre=$_FILES["archivo"]["tmp_name"];
	 $tamaño=$_FILES["archivo"]["size"];
	 $tipo=$_FILES["archivo"]["type"];
	 $error=$_FILES["archivo"]["error"];
	 if ($tipo =="application/vnd.ms-excel") 
	 {
	 	echo "formato correcto<br><br>";
	 	$fila = 1;
	 	$subidos=0;
	 	$error=0;
	
		if (($gestor = fopen($t_nombre, "r")) !== FALSE) 
		{
			$clase_pro=new alumno();
		    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) 
		    {
		        $numero = count($datos);
		        echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
		        
		        if ($fila!=1) 
		        {
		        	//for ($c=0; $c < $numero; $c++) 
			        //{
			            //echo $datos[$c] . "<br />\n";
			            $r=$clase_pro->nueva($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$grupo);
			            if ($r>0) 
			            {
			            	$subidos+=1;
			            	echo "fila {$fila} subida<br>";
			            }else
			            {
			            	$error+=1;
			            	echo "error en fila {$fila}<br>";
			            }
			        //}
			       
		        }
		       $fila++;
		    } 
		    echo "<br>Alumnos registrados: {$subidos}<br>Erores: {$error}";
		    fclose($gestor);
		}



	 }else
	 {
	 	echo "El archivo debe ser formato csv(delimitado por comas)";
	 }
	//$clase_pro=new alumno();
	//$clase_pro->nueva($clave,$nombre,$a_paterno,$a_materno,$sexo,$fecha,$grupo);
	
	//header ("Location: ../vista/registro_alumno.php");
	//echo '<script type="text/javascript">';
	//echo 'window.location.href="../vista/registro_alumno.php";';
	//echo '</script>';
	break;


}


?>
<?php
require '../model/profesor.php';



$accion=$_GET['accion'];



switch($accion)
{
	case 'agregar':
	
	$clave=$_POST['clave'];
	$nombre=$_POST['nombre'];
	$a_paterno=$_POST['a_paterno'];
	$a_materno=$_POST['a_materno'];
	$correo=$_POST['correo'];
	$contrasena=$_POST['contrasena'];
	
	$hash = password_hash($contrasena, PASSWORD_BCRYPT);
	$clase_pro=new profesor();
	$resul=$clase_pro->nueva($clave,$nombre,$a_paterno,$a_materno,$correo,$hash);
	
	if($resul==1) 
	{
		echo "Error: Clave ya esta registrada";
	}
	if($resul==2) 
	{
		echo "Error: Correo ya esta registrado";
	}
	if($resul==0) 
	{
		echo "Registro exitoso";
	}
	//header ("Location: ../index.html");		
	


	break;

	case 'pass':
	
	$clave=$_POST['clave'];
	$actual=$_POST['actual'];
	$nueva=$_POST['nueva'];
	$confirma=$_POST['confirma'];
	
	
	
	$clase_pro=new profesor();
	$resul=$clase_pro->verificar_pass($clave,$actual);
	if($resul>0)
	{
		$hash = password_hash($nueva, PASSWORD_BCRYPT);
		$ya=$clase_pro->editar_pass($clave,$hash);
	}
	if (isset($ya)>0) 
	{
		echo "Cambio realizado con exito <a href='../vista/editar_perfil.php'>regresar</a>";
	}else{
		echo "mal <a href='../vista/editar_perfil.php'>regresar</a>";
	}
	
	//header ("Location: ../index.html");		
	


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

	case 'editar':
	$clave=$_POST['clave'];
	$nombre=$_POST['nombre'];
	$ap=$_POST['ap'];
	$am=$_POST['am'];
	$correo=$_POST['correo'];

	$clase_profesor=new profesor();
	$resultado=$clase_profesor->editar($clave,$nombre,$ap,$am,$correo);
	echo "--{$resultado}--";


	if ($resultado>0) 
	{
		header ("Location: ../vista/editar_perfil.php");
	}else
	{
		echo "Error: No has realizado ningun cambio";
		echo "<br><a href='../vista/editar_perfil.php'>Regresar</a>";
	}
	break;

	case 'foto':
	$clave=$_POST['clave'];
	$aleatorio=rand(1,9999);
	$rr=time();	


	$type=$_FILES['img_up']['type'];
	$tmp_name = $_FILES['img_up']["tmp_name"];
	$name = $_FILES['img_up']["name"];
	
	$nuevo_nombre="{$clave}_{$aleatorio}_{$rr}_{$name}";
	//echo "type: {$type}<br>";
	//echo "tmp_name: {$tmp_name}<br>";
	//echo "name: {$name}<br>";

	//echo "{$nuevo_nombre}<br>";
	//echo "-{$rr}-<br>";
	$nuevo_path="../resource/imageni/foto/".$nuevo_nombre;

	move_uploaded_file($tmp_name,$nuevo_path);
	echo"{$nuevo_path}";

	$clase_profesor=new profesor();
	$clase_profesor->ruta($nuevo_path,$clave);
	//echo "<br>uploaded";
	header ("Location: ../controller/sesion.php?accion=ruta_foto&ruta={$nuevo_path}");
	break;

	case 'editar':
	$clave=$_POST['clave'];
	$orginal=$_POST['nombre'];
	$nueva=$_POST['ap'];
	$nuevaa=$_POST['am'];
	
	$clase_profesor=new profesor();
	$resultado=$clase_profesor->editar($clave,$nombre,$ap,$am,$correo);
	echo "--{$resultado}--";


	if ($resultado>0) 
	{
		header ("Location: ../vista/editar_perfil.php");
	}else
	{
		echo "Error: No has realizado ningun cambio";
		echo "<br><a href='../vista/editar_perfil.php'>Regresar</a>";
	}
	break;

	case 'cambiapassemail':
	$nueva=$_POST['nueva'];
	$clave=$_POST['clave'];
	//echo "---{$clave}---";
	$clase_profesor=new profesor();
	$resultado=$clase_profesor->editar_pass_email($clave,$nueva);

	//$resultado=mysqli_affected_rows($resultado);
	
	//echo "--{$resultado}---";


	if ($resultado>0) 
	{
		echo "<h1>Contraseña se ha cambiado correctamente</h1><br>";
		echo "<a href='../vista/iniciar_sesion.php'>Continuar aqui</a>";
	}else
	{
		echo "<h1>Error: No has realizado ningun cambio</h1>";
		echo "<br><a href='../index.php'>Regresar</a>";
	}
	break;


}


?>
<?php
require '../model/profesor.php';


function entradas_datos($clave)
{
	$cg=new profesor();
	$info=$cg->ver($clave);
	
	while ($row=mysqli_fetch_row($info)) 
	{
		
		echo "<center><label>Nombre</label></center>";
		echo "<center><input name='nombre' type='text' maxlength='20' placeholder='{$row[1]}' value='{$row[1]}' required></input></center>";
		echo "<center><label>Apellido paterno</label></center>";
		echo "<center><input name='ap' type='text' maxlength='30' placeholder='{$row[2]}' value='{$row[2]}' required></input></center>";
		echo "<center><label>apellido materno</label></center>";
		echo "<center><input name='am' type='text' maxlength='30' placeholder='{$row[3]}' value='{$row[3]}' required></input></center>";
		echo "<center><label>Correo</label></center>";
		echo "<center><input name='correo' type='email' maxlength='60' placeholder='{$row[4]}' value='{$row[4]}' required></input></center>";
	}

	
}

function entradas_datos_a($clave)
{
	$cg=new profesor();
	$info=$cg->ver($clave);
	
	while ($row=mysqli_fetch_row($info)) 
	{
		
		echo "<center><label>Nombre</label></center>";
		echo "<center><input name='nombre' type='text' class='form-control form-control-lg' maxlength='20' minlength='5'  placeholder='{$row[1]}' value='{$row[1]}' required></input></center>";
		//echo "<center><label>Apellido paterno</label></center>";
		echo "<center><input name='ap' type='hidden' maxlength='30' placeholder='{$row[2]}' value='{$row[2]}' required></input></center>";
		//echo "<center><label>apellido materno</label></center>";
		echo "<center><input name='am' type='hidden' maxlength='30'  placeholder='{$row[3]}' value='{$row[3]}' required></input></center>";
		echo "<center><label>Correo</label></center>";
		echo "<center><input name='correo' type='email' maxlength='60' class='form-control form-control-lg' placeholder='{$row[4]}' value='{$row[4]}' required></input></center>";
	}

	
}




?>
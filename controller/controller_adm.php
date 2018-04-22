<?php

require '../model/profesor.php';
require '../model/grupo.php';
require '../model/alumno.php';
require '../model/materia.php';

function grupos($ciclo)
{
	$grupo=new grupo();
	$consulta=$grupo->grupos_info($ciclo);
	if (mysqli_num_rows($consulta)<1) 
	{
		echo "No hay grupos regristrados";
		//exit();
	}else
	{
		
		while ($row=mysqli_fetch_row($consulta)) 
		{
			echo "<h3>{$row[0]}| Turno: {$row[1]}| Carrera: {$row[2]}|{$row[3]}</h3><br>";
			
			lista_alumnos($row[0]);
			
		}
		
	}
	

}
function lista_alumnos($grupo)
{
	$alumno=new alumno();
	$lista=$alumno->listar_alumnos($grupo);
	if (mysqli_num_rows($lista)<1) 
	{
		echo "No hay alumnos en este grupo";
		//exit();
	}else
	{
		echo "<table class='table' border='4'>";
			echo "<tr>
			<th>Numero de control</th>
			<th>Nombre</th>
			<th>Apellido paterno</th>
			<th>Apellido materno</th>
			<th>Sexo</th>
			</tr>";
		while ($row=mysqli_fetch_row($lista)) 
		{
			echo "<tr>
			<td>{$row[0]}</td>
			<td>{$row[1]}</td>
			<td>{$row[2]}</td>
			<td>{$row[3]}</td>
			<td>{$row[4]}</td>
			</tr>";
			
		}
		echo "</table>";

	}

}
function list_ciclo_escolar()
{

	$grupo=new grupo();
	$consulta=$grupo->ciclo_escolar();
	if (mysqli_num_rows($consulta)<1) 
	{
		echo "No hay grupos regristrados";
		//exit();
	}else
	{
		echo "<select name='ciclo'>";
		while ($row=mysqli_fetch_row($consulta)) 
		{
			echo "<option>{$row[0]}</option>";
			
			
			
		}
		echo"</select>";
	}	
}
function profesores()
{
	$profesores=new profesor();
	$consulta2=$profesores->lista();

	
	if (mysqli_num_rows($consulta2)<1) 
	{
		echo "No hay profesores regristrados";
		exit();
	}else
	{
		echo "<table class='table' border='4'>";
		echo "<tr>
		<th>Clave</th>
		<th>Nombre</th>
		<th>Apellido paterno</th>
		<th>Apellido materno</th>
		<th>Correo electronico</th>
		</tr>";
		while ($row=mysqli_fetch_row($consulta2)) 
		{
			echo "<tr>
			<td>{$row[0]}</td>
			<td>{$row[1]}</td>
			<td>{$row[2]}</td>
			<td>{$row[3]}</td>
			<td>{$row[4]}</td>
			</tr>";
			
			
		}
		echo "</table>";

	}
}
function materias()
{
	$materia=new materia();
	$consulta=$materia->ver();
	if (mysqli_num_rows($consulta)<1) 
	{
		echo "No hay grupos regristrados";
		//exit();
	}else
	{
		echo "<table class='table' border='4'>";
		echo "<tr>
		<th>Clave</th>
		<th>Nombre</th>
		<th>Creditos</th>
		<th>Editar</th>
		</tr>";
		while ($row=mysqli_fetch_row($consulta)) 
		{
			echo "<form method='POST' action='../controller/controller_materia.php?accion=editar'>";

			echo "<tr>
			<td>
			<input type='hidden' name='clave_old' value='{$row[0]}' placeholder='{$row[0]}'></input>
			<input class='form-control' type='text' name='clave' value='{$row[0]}' maxlength='10' placeholder='{$row[0]}' required></input>
			</td>
			
			<td>
			<input class='form-control' type='text' name='nombre' value='{$row[1]}' maxlength='50' placeholder='{$row[1]}' required></input>
			</td>
			
			<td>
		<input class='form-control' type='number' name='creditos' value='{$row[2]}' max='99' min='1' placeholder='{$row[2]}' required></input>
			</td>

			<td><button type='submint' class='btn btn-success'>Guardar</button></td>

			</tr>";

			echo "</form>";
		}
		echo "</table>";
	}
	

}







?>
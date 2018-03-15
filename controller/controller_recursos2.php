<?php
require '../model/recursos.php';
require '../model/competencia_generica.php';
require '../model/competencia_diciplinar.php';
require '../model/competencia_profesional.php';
require '../model/profesor.php';
require '../model/curso.php';
function actividades_alumno_calificacion($clave_curso,$matricula,$parcial)
{	
	$datos=new recursos();
	$consulta=$datos->actividades_alumno_calificacion($clave_curso,$matricula,$parcial);

	echo"<table id='tab' class='table table-over' border='4'>
	<thead>
		<tr style='background-color:#2E9AFE;'>
			<th>Actividad</th>
			<th>Calificacion</th>
			<th>Competencias</th>
		</tr>
	</thead>";
	echo "<tbody>";
	while ($row=mysqli_fetch_row($consulta)) 
			{
				echo "<tr><td>$row[3]</td>";
					echo"<td>
					<form id='{$row[1]}' method='POST' name='calificacion_act' action='../controller/controller_actividad.php?accion=calificar&entrega={$row[1]}' > 
					<input name='calificacion' type='number' min='0' max='10' step='0.1'  placeholder='{$row[0]}' value='{$row[0]}'></input>
					</form>
				
					</td>";

					echo "<td>";
					//echo "{$row[4]}";
					$com=$datos->com_act_gen($row[4]);
					$co=$datos->com_act_dic($row[4]);
					$c=$datos->com_act_pro($row[4]);
					echo "genericas: ";
						while ($lo=mysqli_fetch_row($com)) 
						{
							echo "<button class='btn btn-outline-info btn-sm' data-toggle='modal' data-target='#examp' id='{$lo[2]}'>{$lo[2]}</button>,";

							//echo "{$lo[2]},";
						}
						echo "<br>diciplinares: ";		
						while ($lo=mysqli_fetch_row($co)) 
						{
							echo "<button class='btn btn-outline-info btn-sm' data-toggle='modal' data-target='#dis' id='{$lo[2]}'>{$lo[2]}</button>,";
							//echo "{$lo[2]},";
						}
						echo "<br>profesionales: ";
						while ($lo=mysqli_fetch_row($c)) 
						{
							echo "<button class='btn btn-outline-info btn-sm' data-toggle='modal' data-target='#pro' id='{$lo[2]}'>{$lo[2]}</button>,";
							//echo "{$lo[2]},";
						}

					echo "</td></tr>";
			}
	echo "</tbody>";
	echo "</table>";

	
}

function competencias_alumno_calificacion($clave,$parcial,$profe)
{	
	$recurso=new recursos();
	$cg=new competencia_generica();
	$d=$recurso->manager_curso($clave);
	$act=$recurso->activida_des($clave,$parcial);
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	$num_competencias_general=$cg->contar_con_c_generica($clave,$parcial);

	$curso=new curso();
	$clave_profesor=$curso->profesor($clave);
	$clave_grupo=$curso->grupo($clave);

	$clave_materia=$curso->clave_materia($clave);
	$nombre_materia=$curso->nombre_materia($clave_materia);

	echo "<table border='0' class='table'>";
	echo "<tr><td><h4>Grupo: {$clave_grupo}</h4></td>
	<td><h6>Clave de asignatura: {$clave_materia}</h6></td>
	<td><h6>Asignatura: {$nombre_materia}</h6><td><br>";
	
	$profe=new profesor();
	$datos=$profe->verr($clave_profesor);

	while ($dat=mysqli_fetch_row($datos)) 
			{
				echo"<tr><td><h6>Clave de profesor: {$dat[0]}</h6></td>";
				echo"<td><h6>Nombre: {$dat[1]} {$dat[2]} {$dat[3]}</h6></td>
				<td><h6>Competencias genericas</h6></td>
				<td><h6>Parcial: {$parcial}</h6></td></tr>";
			}	
echo "</table>";
	echo"<table id='table' class='table table-over' border='4'><thead><tr style='background-color:#2E9AFE;'><th>matricula</th><th>nombre</th>";
	//descripcion de actividades 

	while ($row=mysqli_fetch_row($competencias_general)) 
			{
				echo"<th>competencia {$row[0]}</th>";
			}	

			echo"<th>calificacion</ht></tr></thead>";

	while ($roww=mysqli_fetch_row($d)) 
	{
			//matrucula y nombre de alumnos
			echo"<tr><td>{$roww[0]}</td><td>{$roww[2]} {$roww[3]} {$roww[4]}</td>";
			$act=$recurso->actividades($clave,$roww[0],$parcial);
				$p=$recurso->activida_des($clave,$roww[0],$parcial);
				//$promedio=$recurso->promedio($clave,$roww[0],$parcial);

				$promedio_continua=$recurso->promedio_continua($clave,$roww[0],$parcial);
				$escala=convierte($promedio_continua);
				//calificaciones de actividades editables 
			for ($i=0; $i <$num_competencias_general ; $i++) 
			{ 
				echo "<td>";
				//while ($row=mysqli_fetch_row($promedio_continua)) 
				//{
				//	echo"{$row[0]}";
				//}
				echo "{$escala}";	
				echo "</td>";
			}
					
				
				echo"<td>
				
				";
				if($promedio_continua>=5)
				{
					echo"excelente<span class='icon-cool2' style='color:#2EFE2E;'></span>";
				}else
				{
					if($promedio_continua<5 & $promedio_continua>=4)
					{
						echo"muy bien<span class='icon-grin2' style='color:yellow;'></span>";
					}else
					{
						if($promedio_continua<4 & $promedio_continua>=3)
						{
							echo"Bien<span class='icon-shocked' style='color:blue;'></span>";	
						}else
						{
							if($promedio_continua<3 & $promedio_continua>=2)
							{
								echo"regular<span class='icon-tongue2' style='color:orange;' ></span>";
							}else
							{
								echo"insuficiente<span class='icon-sad2' style='color:red;'></span>";
							}
						}
					}
				}
				echo"</td>";
			
	}
	echo("</table>");
	
}
function competencias_alumno_calificacion_diciplinar($clave,$parcial,$profe)
{	
	$recurso=new recursos();
	$cg=new competencia_diciplinar();
	$d=$recurso->manager_curso($clave);
	$act=$recurso->activida_des($clave,$parcial);
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	$num_competencias_general=$cg->contar_con_c_generica($clave,$parcial);

	$curso=new curso();
	$clave_profesor=$curso->profesor($clave);
	$clave_grupo=$curso->grupo($clave);

	$clave_materia=$curso->clave_materia($clave);
	$nombre_materia=$curso->nombre_materia($clave_materia);

	echo "<table border='0' class='table'>";
	echo "<tr><td><h4>Grupo: {$clave_grupo}</h4></td>
	<td><h6>Clave de asignatura: {$clave_materia}</h6></td>
	<td><h6>Asignatura: {$nombre_materia}</h6><td><br>";
	

	
	$profe=new profesor();
	$datos=$profe->verr($clave_profesor);

	while ($dat=mysqli_fetch_row($datos)) 
			{
				echo"<tr><td><h6>Clave de profesor: {$dat[0]}</h6></td>";
				echo"<td><h6>Nombre: {$dat[1]} {$dat[2]} {$dat[3]}</h6></td>
				<td><h6>Competencias disciplinares</h6></td>
				<td><h6>Parcial: {$parcial}</h6></td></tr>";
			}
			echo "</table>";

	echo"<table id='table' class='table table-over' border='4'><thead><tr style='background-color:#2E9AFE;'><th>matricula</th><th>nombre</th>";
	//descripcion de actividades 

	while ($row=mysqli_fetch_row($competencias_general)) 
			{
				echo"<th>competencia {$row[0]}</th>";
			}	

			echo"<th>calificacion</ht></tr></thead>";

	while ($roww=mysqli_fetch_row($d)) 
	{
			//matrucula y nombre de alumnos
			echo"<tr><td>{$roww[0]}</td><td>{$roww[2]} {$roww[3]} {$roww[4]}</td>";
			$act=$recurso->actividades($clave,$roww[0],$parcial);
				$p=$recurso->activida_des($clave,$roww[0],$parcial);
				//$promedio=$recurso->promedio($clave,$roww[0],$parcial);

				$promedio_continua=$recurso->promedio_continua($clave,$roww[0],$parcial);
				$escala=convierte($promedio_continua);
				//calificaciones de actividades editables 
			for ($i=0; $i <$num_competencias_general ; $i++) 
			{ 
				echo "<td>";
				//while ($row=mysqli_fetch_row($promedio_continua)) 
				//{
				//	echo"{$row[0]}";
				//}
				echo "{$escala}";	
				echo "</td>";
			}
					
				
				echo"<td>
				
				";
				if($promedio_continua>=5)
				{
					echo"excelente<span class='icon-cool2' style='color:#2EFE2E;'></span>";
				}else
				{
					if($promedio_continua<5 & $promedio_continua>=4)
					{
						echo"muy bien<span class='icon-grin2' style='color:yellow;'></span>";
					}else
					{
						if($promedio_continua<4 & $promedio_continua>=3)
						{
							echo"Bien<span class='icon-shocked' style='color:blue;'></span>";	
						}else
						{
							if($promedio_continua<3 & $promedio_continua>=2)
							{
								echo"regular<span class='icon-tongue2' style='color:orange;' ></span>";
							}else
							{
								echo"insuficiente<span class='icon-sad2' style='color:red;'></span>";
							}
						}
					}
				}
				echo"</td>";
			
	}
	echo("</table>");
	
}
function competencias_alumno_calificacion_pro($clave,$parcial,$profe)
{	
	$recurso=new recursos();
	$cg=new competencia_profesional();
	$d=$recurso->manager_curso($clave);
	$act=$recurso->activida_des($clave,$parcial);
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	$num_competencias_general=$cg->contar_con_c_generica($clave,$parcial);


	$curso=new curso();
	$clave_profesor=$curso->profesor($clave);
	$clave_grupo=$curso->grupo($clave);
	
	$clave_materia=$curso->clave_materia($clave);
	$nombre_materia=$curso->nombre_materia($clave_materia);

	echo "<table border='0' class='table'>";
	echo "<tr><td><h4>Grupo: {$clave_grupo}</h4></td>
	<td><h6>Clave de asignatura: {$clave_materia}</h6></td>
	<td><h6>Asignatura: {$nombre_materia}</h6><td><br>";
	

	$profe=new profesor();
	$datos=$profe->verr($clave_profesor);

	while ($dat=mysqli_fetch_row($datos)) 
			{
				echo"<tr><td><h6>Clave de profesor: {$dat[0]}</h6></td>";
				echo"<td><h6>Nombre: {$dat[1]} {$dat[2]} {$dat[3]}</h6></td>
				<td><h6>Competencias profesionales</h6></td>
				<td><h6>Parcial: {$parcial}</h6></td></tr>";
			}
			echo "</table>";

	echo"<table id='table' class='table table-over' border='4'><thead><tr style='background-color:#2E9AFE;'><th>matricula</th><th>nombre</th>";
	//descripcion de actividades 

	while ($row=mysqli_fetch_row($competencias_general)) 
			{
				echo"<th>competencia {$row[0]}</th>";
			}	

			echo"<th>calificacion</ht></tr></thead>";

	while ($roww=mysqli_fetch_row($d)) 
	{
			//matrucula y nombre de alumnos
			echo"<tr><td>{$roww[0]}</td><td>{$roww[2]} {$roww[3]} {$roww[4]}</td>";
			$act=$recurso->actividades($clave,$roww[0],$parcial);
				$p=$recurso->activida_des($clave,$roww[0],$parcial);
				//$promedio=$recurso->promedio($clave,$roww[0],$parcial);

				$promedio_continua=$recurso->promedio_continua($clave,$roww[0],$parcial);
				$escala=convierte($promedio_continua);
				//calificaciones de actividades editables 
			for ($i=0; $i <$num_competencias_general ; $i++) 
			{ 
				echo "<td>";
				//while ($row=mysqli_fetch_row($promedio_continua)) 
				//{
				//	echo"{$row[0]}";
				//}
				echo "{$escala}";	
				echo "</td>";
			}
					
				
				echo"<td>
				
				";
				if($promedio_continua>=5)
				{
					echo"excelente<span class='icon-cool2' style='color:#2EFE2E;'></span>";
				}else
				{
					if($promedio_continua<5 & $promedio_continua>=4)
					{
						echo"muy bien<span class='icon-grin2' style='color:yellow;'></span>";
					}else
					{
						if($promedio_continua<4 & $promedio_continua>=3)
						{
							echo"Bien<span class='icon-shocked' style='color:blue;'></span>";	
						}else
						{
							if($promedio_continua<3 & $promedio_continua>=2)
							{
								echo"regular<span class='icon-tongue2' style='color:orange;' ></span>";
							}else
							{
								echo"insuficiente<span class='icon-sad2' style='color:red;'></span>";
							}
						}
					}
				}
				echo"</td>";
			
	}
	echo("</table>");
	
}
function convierte($prom)
{
	$nom;
	if($prom>=5)
	{
		
		$nom='EX';
	}else
	{
		if($prom<5 & $prom>=4)
		{
			
			$nom='MB';
		}else
		{
			if($prom<4 & $prom>=3)
			{
				
				$nom='BI';	
			}else
			{
				if($prom<3 & $prom>=2)
				{
				
					$nom='RE';
				}else
				{
					
					$nom='IN';
				}
			}
		}
	}
	return $nom;
}
function listar_competencias($clave,$parcial)
{
	$cg=new competencia_generica();
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	echo "<table class='table' border='4'><tr><td>No.</td><td>Atributo</td><td>Competencia</td></tr>";
	while ($row=mysqli_fetch_row($competencias_general)) 
	{

		$competencias=$cg->buscar($row[0]);
		while ($ro=mysqli_fetch_row($competencias)) 
		{
			echo "<tr><td>competencia {$row[0]}</td><td>{$ro[0]}</td><td>{$ro[1]}</td></tr>";
		}
	}
echo "<table><br><br><br>";
	
}
function listar_competencias_diciplinar($clave,$parcial)
{
	$cg=new competencia_diciplinar();
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	echo "<table class='table' border='4'><tr><td>Clave</td><td>Descripcion</td><td>Categoria</td></tr>";
	while ($row=mysqli_fetch_row($competencias_general)) 
	{

		$competencias=$cg->buscar($row[0]);
		while ($ro=mysqli_fetch_row($competencias)) 
		{
			echo "<tr><td>competencia {$row[0]}</td><td>{$ro[0]}</td><td>{$ro[1]}</td></tr>";
		}
	}
echo "<table><br><br><br>";
	
}
function listar_competencias_profesional($clave,$parcial)
{
	$cg=new competencia_profesional();
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	echo "<table class='table' border='4'><tr><td>Clave</td><td>Descripcion</td><td>Categoria</td></tr>";
	while ($row=mysqli_fetch_row($competencias_general)) 
	{
		$competencias=$cg->buscar($row[0]);
		while ($ro=mysqli_fetch_row($competencias)) 
		{
			echo "<tr><td>competencia {$row[0]}</td><td>{$ro[0]}</td><td>{$ro[1]}</td></tr>";
		}
	}
echo "<table><br><br><br>";
	
}





?>
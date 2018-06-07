<?php
require '../model/recursos.php';
require '../model/competencia_generica.php';
require '../model/competencia_diciplinar.php';
require '../model/competencia_profesional.php';
require '../model/profesor.php';
require '../model/curso.php';

function obtener_datos($clave,$parcial,$profe,$competencias)
{
	$datoss=array();
	$curso=new curso();
	$clave_profesor=$curso->profesor($clave);
	$clave_grupo=$curso->grupo($clave);
	$clave_materia=$curso->clave_materia($clave);
	$nombre_materia=$curso->nombre_materia($clave_materia);

	$profe=new profesor();
	$datos=$profe->verr($clave_profesor);

	while ($dat=mysqli_fetch_row($datos)) 
			{
				$datoss[0]=$dat[0];//clave de profesoor
				$datoss[1]="{$dat[1]} {$dat[2]} {$dat[3]}";//nombre y apellidos
			}	
			//$datos[0]=$clave_profesor;
			//$datos[1]="{$dat[1]} {$dat[2]} {$dat[3]}";
			$datoss[2]=$clave_materia;
			$datoss[3]=utf8_decode($nombre_materia);
			$datoss[4]=$clave_grupo;
			$datoss[5]=$parcial;
			$datoss[6]=$competencias;
			return $datoss;
}
function encabezado ($clave,$parcial,$profe)
{
	$cg=new competencia_generica();
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	$encabezado=array();
	$encabezado[0]="matricula";
	$encabezado[1]="nombre";
	$i=2;
	//descripcion de actividades 

	while ($row=mysqli_fetch_row($competencias_general)) 
			{
				$encabezado[$i]=$row[0];
				$i++;
			}	
			$encabezado[$i]="calificacion";
		return $encabezado;

}
function contenido_tabla($clave,$parcial,$profe)
{
	$contenido=array();
	$recurso=new recursos();
	$cg=new competencia_generica();
	$d=$recurso->manager_curso($clave);
	$num_competencias_general=$cg->contar_con_c_generica($clave,$parcial);
	$x=2;
	$y=0;
	while ($roww=mysqli_fetch_row($d)) 
	{
			//matrucula y nombre de alumnos
			
			$contenido[$y][0]=$roww[0];
			$contenido[$y][1]="{$roww[2]} {$roww[3]} {$roww[4]}";

				$act=$recurso->actividades($clave,$roww[0],$parcial);
				$p=$recurso->activida_des($clave,$roww[0],$parcial);
				$promedio_continua=$recurso->promedio_continua($clave,$roww[0],$parcial);
				$escala=convierte($promedio_continua);
				//calificaciones de actividades editables 
				$x=2;
			for ($i=0; $i <$num_competencias_general ; $i++) 
			{ 
				
				$contenido[$y][$x]=$escala;
				$x++;	
			}
				$calificacion=calificacion($promedio_continua);
				$contenido[$y][$x]=$calificacion;
				$y++;
				
			
	}
	return $contenido;

}
//---------------------------------------------------------------------------------------
function encabezado2 ($clave,$parcial,$profe)
{
	$cg=new competencia_diciplinar();
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	$encabezado=array();
	$encabezado[0]="matricula";
	$encabezado[1]="nombre";
	$i=2;
	//descripcion de actividades 

	while ($row=mysqli_fetch_row($competencias_general)) 
			{
				$encabezado[$i]=$row[0];
				$i++;
			}	
			$encabezado[$i]="calificacion";
		return $encabezado;

}
function contenido_tabla2($clave,$parcial,$profe)
{
	$contenido=array();
	$recurso=new recursos();
	$cg=new competencia_diciplinar();
	$d=$recurso->manager_curso($clave);
	$num_competencias_general=$cg->contar_con_c_generica($clave,$parcial);
	$x=2;
	$y=0;
	while ($roww=mysqli_fetch_row($d)) 
	{
			//matrucula y nombre de alumnos
			
			$contenido[$y][0]=$roww[0];
			$contenido[$y][1]="{$roww[2]} {$roww[3]} {$roww[4]}";

				$act=$recurso->actividades($clave,$roww[0],$parcial);
				$p=$recurso->activida_des($clave,$roww[0],$parcial);
				$promedio_continua=$recurso->promedio_continua($clave,$roww[0],$parcial);
				$escala=convierte($promedio_continua);
				//calificaciones de actividades editables 
				$x=2;
			for ($i=0; $i <$num_competencias_general ; $i++) 
			{ 
				
				$contenido[$y][$x]=$escala;
				$x++;	
			}
				$calificacion=calificacion($promedio_continua);
				$contenido[$y][$x]=$calificacion;
				$y++;
				
			
	}
	return $contenido;

}
//---------------------------------------------------------------------------------------------
function encabezado3 ($clave,$parcial,$profe)
{
	$cg=new competencia_profesional();
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	$encabezado=array();
	$encabezado[0]="matricula";
	$encabezado[1]="nombre";
	$i=2;
	//descripcion de actividades 

	while ($row=mysqli_fetch_row($competencias_general)) 
			{
				$encabezado[$i]=$row[0];
				$i++;
			}	
			$encabezado[$i]="calificacion";
		return $encabezado;

}
function contenido_tabla3($clave,$parcial,$profe)
{
	$contenido=array();
	$recurso=new recursos();
	$cg=new competencia_profesional();
	$d=$recurso->manager_curso($clave);
	$num_competencias_general=$cg->contar_con_c_generica($clave,$parcial);
	$x=2;
	$y=0;
	while ($roww=mysqli_fetch_row($d)) 
	{
			//matrucula y nombre de alumnos
			
			$contenido[$y][0]=$roww[0];
			$contenido[$y][1]="{$roww[2]} {$roww[3]} {$roww[4]}";

				$act=$recurso->actividades($clave,$roww[0],$parcial);
				$p=$recurso->activida_des($clave,$roww[0],$parcial);
				$promedio_continua=$recurso->promedio_continua($clave,$roww[0],$parcial);
				$escala=convierte($promedio_continua);
				//calificaciones de actividades editables 
				$x=2;
			for ($i=0; $i <$num_competencias_general ; $i++) 
			{ 
				
				$contenido[$y][$x]=$escala;
				$x++;	
			}
				$calificacion=calificacion($promedio_continua);
				$contenido[$y][$x]=$calificacion;
				$y++;
				
			
	}
	return $contenido;

}

function competencias_alumno_calificacon_pro($clave,$parcial,$profe)
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
					
				
				echo"<td>";
				$calificacion=calificacion($promedio_continua);
				echo $calificacion;
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
function calificacion($prom)
{
	$nom;
	if($prom>=5)
	{
		
		$nom="excelente";
	}else
	{
		if($prom<5 & $prom>=4)
		{
			
			$nom="muy bien";
		}else
		{
			if($prom<4 & $prom>=3)
			{
				
				$nom="Bien";	
			}else
			{
				if($prom<3 & $prom>=2)
				{
				
					$nom="regular";
				}else
				{
					
					$nom="insuficiente";
				}
			}
		}
	}
	return $nom;
}
function listar_competencias_genericas($clave,$parcial)
{
	$datos=array();
	$cg=new competencia_generica();
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	$datos[0][0]="Numero";
	$datos[0][1]="Atributo";
	$datos[0][2]="Competencia";
	$y=1;
	while ($row=mysqli_fetch_row($competencias_general)) 
	{

		$competencias=$cg->buscar($row[0]);
		while ($ro=mysqli_fetch_row($competencias)) 
		{
			
			$datos[$y][0]=utf8_decode($row[0]);
			$datos[$y][1]=utf8_decode($ro[0]);
			$datos[$y][2]=utf8_decode($ro[1]);
			$y++;
		}
	}

return $datos;
	
}
function listar_competencias_diciplinares($clave,$parcial)
{
	$datos=array();
	$cg=new competencia_diciplinar();
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	$datos[0][0]="clave";
	$datos[0][1]="categoria";
	$datos[0][2]="descripcion";
	$y=1;
	while ($row=mysqli_fetch_row($competencias_general)) 
	{

		$competencias=$cg->buscar($row[0]);
		while ($ro=mysqli_fetch_row($competencias)) 
		{
			
			$datos[$y][0]=utf8_decode($row[0]);
			$datos[$y][2]=utf8_decode($ro[1]);
			$datos[$y][1]=utf8_decode($ro[0]);
			$y++;
		}
	}
	return $datos;
	
}
function listar_competencias_profesionales($clave,$parcial)
{
	$datos=array();
	$cg=new competencia_profesional();
	$competencias_general=$cg->buscar_con_c_generica($clave,$parcial);
	$datos[0][0]="clave";
	$datos[0][1]="categoria";
	$datos[0][2]="descripcion";
	$y=1;
	while ($row=mysqli_fetch_row($competencias_general)) 
	{
		$competencias=$cg->buscar($row[0]);
		while ($ro=mysqli_fetch_row($competencias)) 
		{
			$datos[$y][0]=utf8_decode($row[0]);
			$datos[$y][2]=utf8_decode($ro[1]);
			$datos[$y][1]=utf8_decode($ro[0]);
			$y++;
		}
	}
return $datos;
	
}





?>
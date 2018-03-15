<?php
require '../model/recursos.php';
require '../model/grupo.php';
require '../model/curso.php';
require '../model/actividad.php';
require '../model/competencia_generica.php';
require '../model/competencia_diciplinar.php';
require '../model/competencia_profesional.php';
function grupos()
{
	$recurso=new grupo();	
	$c=$recurso->vertodo();
	echo"<select class='form-control' name='grupo' id='grupo' required> ";
	while ($row=mysqli_fetch_row($c)) 
	{
		
		echo"<option value='$row[0]'>{$row[0]}</option>";
		
	}
	echo"</select> ";
}
function materias()
{
	$recurso=new recursos();
	$d=$recurso->materias();
	echo"<select class='form-control' name='materia' id='materia' required> ";
	while ($roww=mysqli_fetch_row($d)) 
	{
		
		echo"<option value='$roww[0]'>{$roww[0]}-{$roww[1]} </option>";
		
	}
	echo"</select> ";
}
function cursos($pro)
{	
	$recurso=new recursos();
	$d=$recurso->cursos($pro);
	if (mysqli_num_rows($d)>0) 
	{
		while ($roww=mysqli_fetch_row($d)) 
		{
			echo"
			<center><div class='card' style='width: 20rem;'>
	  	
	  		<div class='card-body'>
	  		";
			
			 $materia=$recurso->nombre_materia($roww[1]);
			 while($r=mysqli_fetch_row($materia))
			 {
			 		$mate=$r[0];
			 }
			echo"<h6>  {$roww[0]}</h6><br> ";
			echo"<h4 class='card-title'>{$mate}</h4> ";
			echo" <p class='card-text'> Grupo: {$roww[2]}</h1> </p>";
			echo" <a href='../controller/sesion.php?curso={$roww[0]}&accion=actividades_curso'><button class='btn btn-success'>administrar</button></a>";

			//echo" <a href='../controller/controller_curso.php?clave={$roww[0]}&accion=borrar'><button class='btn btn-danger'><span class='icon-bin '></span></button></a><br>";

			echo" <a href='../controller/sesion.php?curso={$roww[0]}&accion=selecciona_curso&p=1'><button class='btn btn-secondary'>1</button></a>";
			echo" <a href='../controller/sesion.php?curso={$roww[0]}&accion=selecciona_curso&p=2'><button class='btn btn-secondary'>2</button></a>";
			echo" <a href='../controller/sesion.php?curso={$roww[0]}&accion=selecciona_curso&p=3'><button class='btn btn-secondary'>3</button></a>";

			
			echo"</div></div> </center><br>";	
		}
	}
	else
	{
		echo "
		<center>
			<div class='card' style='width: 20rem;'>
		 		<div class='card-body'>
			 		<h4 class='card-title'>No hay cursos</h4> 
			 		<p class='card-text'>Click para registrar nuevo</h1> </p>
			 		 <a href='Registro_curso.php'><button class='btn btn-info'>Nuevo curso</button></a>
			 		 <br>
		 		 </div>
	 		 </div>
 		 </center>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>
 		 <br>


 		";	
	}
	
	
}

function cursos_select($pro)
{	
	$recurso=new recursos();
	$d=$recurso->cursos($pro);
	echo"<select name='curso' required>";
	while ($roww=mysqli_fetch_row($d)) 
	{
		echo"<option value='{$roww[0]}'>{$roww[1]}-{$roww[2]} </value>";	
	}
	echo"</select>";
	
}
function actividades_cursos($clave_curso)
{	
	$act=new actividad();
	$uno=$act->ver($clave_curso,1);
	$dos=$act->ver($clave_curso,2);
	$tres=$act->ver($clave_curso,3);

	echo"<table border='0' class='table'><tr>
	<th>Atividad</th><th>Parcial</th><th>Borrar</th></tr> ";
	while ($row=mysqli_fetch_row($uno)) 
	{
		echo"<tr style='background-color:#A9BCF5;'>
		<td>{$row[0]}</td>
		<td>{$row[1]}</td>
		";
			if ($row[3]!='continua') 
			{
						echo"<td>{$row[3]}</td>
				</tr>
				";	
				
			}else
			{
				
				echo"<td><a href='../controller/controller_actividad.php?accion=borrar&clave={$row[2]}'>
				<button class='btn btn-danger'><span class='icon-bin '></span></button></a></td>
				</tr>
				";	
			}
	
	}

	while ($row2=mysqli_fetch_row($dos)) 
	{
		echo"<tr style='background-color:#F78181;'>
		<td>{$row2[0]}</td>
		<td>{$row2[1]}</td>";
		if ($row2[3]!='continua') 
			{
						echo"<td>{$row2[3]}</td>
				</tr>
				";	
				
			}else
			{
				echo"
				<td><a href='../controller/controller_actividad.php?accion=borrar&clave={$row2[2]}'>
				<button class='btn btn-danger'><span class='icon-bin '></span></button></a></td>
				</tr>
				";	
			
			}

		
			
	}	

	while ($row3=mysqli_fetch_row($tres)) 
	{
		echo"<tr style='background-color:#F3F781;'>
		<td>{$row3[0]}</td>
		<td>{$row3[1]}</td>";
			if ($row3[3]!='continua') 
			{
						echo"<td>{$row3[3]}</td>
				</tr>
				";	
				
			}else
			{
					echo"<td><a href='../controller/controller_actividad.php?accion=borrar&clave={$row3[2]}'>
					<button class='btn btn-danger'><span class='icon-bin '></span></button></a></td>
					</tr>
					";	
			
			}

	
			
	}
	echo"</table>";	
	
}
function manager_curso($clave,$parcial)
{	
	$recurso=new recursos();
	$d=$recurso->manager_curso($clave);
	$act=$recurso->activida_des($clave,$parcial);



	echo"<table id='table' class='table table-over' border='4'><thead><tr style='background-color:#2E9AFE;'><th>matricula</th><th>nombre</th>";
	//descripcion de actividades 

	while ($row=mysqli_fetch_row($act)) 
			{
				echo"<th>{$row[0]}</th>";
			}	

			echo"<th>calificacion</ht></tr></thead>";

	while ($roww=mysqli_fetch_row($d)) 
	{
			//matrucula y nombre de alumnos
			echo"<tr><td>{$roww[0]}</td><td>{$roww[2]} {$roww[3]} {$roww[4]}</td>";
			$act=$recurso->actividades($clave,$roww[0],$parcial);
				$p=$recurso->activida_des($clave,$roww[0],$parcial);
				$promedio=$recurso->promedio($clave,$roww[0],$parcial);
				//calificaciones de actividades editables 
			while ($row=mysqli_fetch_row($act)) 
			{
				
				echo"<td>
				<form id='{$row[1]}' method='POST' name='calificacion_act' action='../controller/controller_actividad.php?accion=calificar&entrega={$row[1]}' > 
				<input name='calificacion' type='number' min='0' max='10' step='0.1'  placeholder='{$row[0]}' value='{$row[0]}'></input>
				</form>
			
				</td>";

			}			
			while ($resul=mysqli_fetch_row($promedio)) 
			{
				
				echo"<td>
				{$resul[0]}
				";
				if($resul[0]>=9)//nueve a diez
				{
					echo"excelente<span class='icon-cool2' style='color:#2EFE2E;'></span>";
				}else
				{
					if($resul[0]<9 & $resul[0]>=8)//8 a 8.9
					{
						echo"muy bien<span class='icon-grin2' style='color:yellow;'></span>";
					}else
					{
						if($resul[0]<8 & $resul[0]>=7)//7 a 7.9
						{
							echo"Bien<span class='icon-shocked' style='color:blue;'></span>";	
						}else
						{
							if($resul[0]<7 & $resul[0]>=6)//6 a 6.9
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

	}
	echo("</table>");
	
}
function competencias_profesionales($clave,$parcial)
{
	$clase_pro=new competencia_profesional();
	$consulta=$clase_pro->ver_competencias_curso($clave,$parcial);
	//$n=count($consulta);
	if($consulta==null)
	{
		//echo"<button class='btn btn-warning'>No ha seleccionado competencias profesionales</button>";
	}else
	{
		echo"<h6 style='color:#2E9AFE;'>Competencias profesionales</h6>";
		echo"<table border='0' class='table table-hover' id='tabla'>
		<thead>
		<tr style='background-color:#2E9AFE;'>
		<th>Descripcion</th>
		<th>Categoria</th>
		<th>Nivel</th>
		<th>Borrar</th>
		</tr>
		</thead>
		<tbody>";
		while ($row = mysqli_fetch_row($consulta)) 
		{
    	    echo"<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>
    	    <td><a href='../controller/select_competencias.php?accion=eliminar_profesional&clave={$row[3]}'>
    	    <button class='btn btn-danger'><span class='icon-bin'></span></button>
    	    </a></td></tr>";
    	}	
    	echo"</tbody></table>";
		}
}
function competencias_diciplinares($clave,$parcial)
{
	$clase=new competencia_diciplinar();
	$consult=$clase->ver_competencias_curso($clave,$parcial);
	//$m=count($consult);
	if($consult==null)
	{
		//echo"<button class='btn btn-warning'>No ha seleccionado competencias diciplinares</button><br>";
	}else
	{
		echo"<h6 style='color:#2E9AFE;'>Competencias diciplinares</h6>";
		echo"<table border='0' class='table table-hover' id='tabla'>
		<thead>
		<tr style='background-color:#2E9AFE;'>
		<th>Descripcion</th>
		<th>Categoria</th>
		<th>Nivel</th>
		<th>Borrar</th>
		</tr>
		</thead>
		<tbody>";
		while ($row = mysqli_fetch_row($consult)) 
		{
        	echo"<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>
        	<td><a href='../controller/select_competencias.php?accion=eliminar_diciplinar&clave={$row[3]}'>
    	    <button class='btn btn-danger'><span class='icon-bin'></span></button>
    	    </a></td>
        	</tr>";
    	}	
    	echo"</tbody></table>";

	}
	
}
function competencias_genericas($clave,$parcial)
{
	$clase=new competencia_generica();
	$consult=$clase->ver_competencias_curso($clave,$parcial);
	//$m=count($consult);
	if($consult==null)
	{
		//echo"<button class='btn btn-warning'>No ha seleccionado competencias generica</button><br>";
	}else
	{
		echo"<h6 style='color:#2E9AFE;'>Competencias genericas</h6>";
		echo"<table border='0' class='table table-hover' id='tabla'>
		<thead>
		<tr style='background-color:#2E9AFE;'>
		<th>Descripcion</th>
		<th>Categoria</th>
		
		<th>Borrar</th>
		</tr>
		</thead>
		<tbody>";
		while ($row = mysqli_fetch_row($consult)) 
		{
        	echo"<tr><td>{$row[0]}</td><td>{$row[3]}</td>
        	<td><a href='../controller/select_competencias.php?accion=eliminar_generica&clave={$row[2]}'>
    	    <button class='btn btn-danger'><span class='icon-bin'></span></button>
    	    </a></td>
        	</tr>";
    	}	
    	echo"</tbody></table>";

	}
	
}
function actividades_criterios($parcial,$tipo,$curso)
{
	$clase=new actividad();
	$consult=$clase->evaluacion($parcial,$tipo,$curso);

}


function manager_curso_simple($clave,$parcial)
{	
	$recurso=new recursos();
	$d=$recurso->manager_curso($clave);
	$act=$recurso->actividades_tipo($clave,$parcial);

	echo"<table id='table' class='table table-over' border='4'><thead><tr style='background-color:#2E9AFE;'><th>matricula</th><th>nombre</th>";
	//descripcion de actividades 

	while ($row=mysqli_fetch_row($act)) 
			{
				if ($row[1]=="continua") 
				{
					
				}else
				{
					echo"<th>{$row[0]}</th>";
				}
				
			}	

			echo"<th>Evaluacion continua</th><th>calificacion</th></tr></thead>";

	while ($roww=mysqli_fetch_row($d)) //pasa por todos los alumnos
	{
		$suma=0;
		$div=0;
		$total=0;
		
			//matrucula y nombre de alumnos
			echo"<tr>
			<td><a href='actividades_alumno.php?matricula={$roww[0]}&n={$roww[2]}&ap={$roww[3]}&am={$roww[4]}' style='color:black;'>{$roww[0]}</a></td>
			<td>{$roww[2]} {$roww[3]} {$roww[4]}</td>";
			$matricula=$roww[0];
			$act=$recurso->actividades_simple($clave,$roww[0],$parcial);//calificacion de actividades
				$p=$recurso->actividades_tipo($clave,$roww[0],$parcial);//descripcion de actividades
				//$promedio=$recurso->promedio($clave,$roww[0],$parcial);
				//calificaciones de actividades editables 
			while ($row=mysqli_fetch_row($act)) 
			{
				if ($row[2]=="continua") 
				{
					$suma=$suma+$row[0];
					$div+=1;
				}else
				{
					echo"<td>
					<form id='{$row[1]}' method='POST' name='calificacion_act' action='../controller/controller_actividad.php?accion=calificar&entrega={$row[1]}' > 
					<input name='calificacion' type='number' min='0' max='10' step='0.1'  placeholder='{$row[0]}' value='{$row[0]}'></input>
					</form>
				
					</td>";
				}
				
			}
			if($div>0)
			{
				$total=round($suma/$div,2);
				$red=$suma/$div;
				echo "<td>
				{$total}
				</td>";		
	
			}else
			{
				echo "<td>
				0
				</td>";
			}
			
				$exa=$recurso->promedio_examen($clave,$matricula,$parcial);
				$ora=$recurso->promedio_orientacion($clave,$matricula,$parcial);
				$tuto=$recurso->promedio_tutoria($clave,$matricula,$parcial);
				$ex=$recurso->promedio_extra($clave,$matricula,$parcial);
				$continua=$recurso->promedio_continua($clave,$matricula,$parcial);
			
			$gg=($total*60)/100;
			$prom=$exa+$ora+$tuto+$ex+$continua;
			if ($prom>10) 
			{
				$prom=10;
			}
			
				
				echo"<td>
				{$prom}
				";
				if($prom>=9)
				{
					echo"excelente<span class='icon-cool2' style='color:#2EFE2E;'></span>";
				}else
				{
					if($prom<9 & $prom>=8)
					{
						echo"muy bien<span class='icon-grin2' style='color:yellow;'></span>";
					}else
					{
						if($prom<8 & $prom>=7)
						{
							echo"Bien<span class='icon-shocked' style='color:blue;'></span>";	
						}else
						{
							if($prom<7 & $prom>=6)
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

			
			echo("</tr>");
	}
	echo("</table>");
	
}


?>
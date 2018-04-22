<?php
require '../model/competencia_generica.php';
require '../model/competencia_diciplinar.php';
require '../model/competencia_profesional.php';

/**
* 
*/
class lista
{
	
	function genericas($curso,$parcial)
	{
		//echo "{$curso}+{$parcial}";
		$clase_generica=new competencia_generica();
		$consulta=$clase_generica->ver_competencias();
		$enlasadas=$clase_generica->arreglo_competencias_generales($curso,$parcial);
		/*for ($i=0; $i<count($enlasadas); $i++) {
			echo ("enlazadas {$enlasadas[$i]}");
		}*/


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
		    		<button class='btn btn-success'><span class='icon-folder-plus'></span></button></a>
	    		
	  			";
	  			for ($i=0; $i<count($enlasadas); $i++) 
	  			{
					if ($enlasadas[$i]==$r[0]) 
					{
						echo "<a href='../controller/select_competencias.php?accion=eliminar_generica&clave={$r[0]}&page_competencias=si'>
		    		<button class='btn btn-danger'><span class='icon-folder-minus'></span></button></a>";
					}
				
				}
	  			echo "</td></tr>";

	  		}
	  		echo"</table>";
			//$array[$i]=['clave'=>$roow[0],'des'=>$roow[1],'cat'=>$roow[2]];	
			//$i=$i+1;
		}
	}
	function disciplinares($curso,$parcial)
	{
		//echo "{$curso}+{$parcial}";
			$clase_diciplinar=new competencia_diciplinar();
			$consulta=$clase_diciplinar->vertodo();
			$enlasadas=$clase_diciplinar->arreglo_competencias_disciplinares_general($curso,$parcial);

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
		                echo"
		                <tr>
			                <td>{$row[0]}</td>
			                <td>{$row[1]}</td><td>{$row[2]}</td>
			                <td>{$row[3]}</td>
			                <td><a href='../controller/select_competencias.php?accion=agregar&clave={$row[0]}'><button class='btn btn-success'><span class='icon-folder-plus'></span></button></a>";
		                	for ($i=0; $i<count($enlasadas); $i++) 
				  			{
								if ($enlasadas[$i]==$row[0]) 
								{
									echo "<a href='../controller/select_competencias.php?accion=eliminar_diciplinar&clave={$row[0]}&page_competencias=si'>
					    		<button class='btn btn-danger'><span class='icon-folder-minus'></span></button></a>";
								}
							
							}
							echo "</td></tr>";


		            }	
		            echo"</tbody></table>";

	}
	function profesionales($curso,$parcial)
	{
		//echo "{$curso}+{$parcial}";	
		$clase_pro=new competencia_profesional();
			$consulta=$clase_pro->vertodo();

			$enlasadas=$clase_pro->arreglo_competencias_profesionales($curso,$parcial);

			echo"<table border='1' class='table table-striped' id='tabla'>
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
		                echo"<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td><a href='../controller/select_competencias.php?accion=agregar2&clave={$row[0]}'><button class='btn btn-success'><span class='icon-folder-plus'></span></button></a>";

		                for ($i=0; $i<count($enlasadas); $i++) 
				  			{
								if ($enlasadas[$i]==$row[0]) 
								{
									echo "<a href='../controller/select_competencias.php?accion=eliminar_profesional&clave={$row[0]}&page_competencias=si'>
					    		<button class='btn btn-danger'><span class='icon-folder-minus'></span></button></a>";
								}
							
							}
		                echo "</td></tr>";
		            }	
		            echo"</tbody></table>";

	}
}












?>
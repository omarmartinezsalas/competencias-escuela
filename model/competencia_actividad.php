<?php



class competencia_actividad
{
	  
	  
	public function competencia_actividad_generica($curso,$competencia,$actividad)
	{
		require '../model/conexion.php';
		$resul=0;	


		$consulta_clave=$conn->prepare("select * from curso_generica where clave_competencia=? and id_actividad=?;");
			$consulta_clave->bind_param("si",$competencia, $actividad);
			$cr=$consulta_clave->execute();
			$consulta_clave->store_result();
			$resul_clave=$consulta_clave->num_rows();
			$consulta_clave->close();

			if ($resul_clave==0)
			{
				$new_actividad=$conn->prepare("insert into curso_generica (clave_curso,clave_competencia,id_actividad) values (?, ?, ?);");
				$new_actividad->bind_param("iii",$curso, $competencia, $actividad);
				$c=$new_actividad->execute();
				$new_actividad->store_result();
				$resultado=$new_actividad->affected_rows;
				$new_actividad->close();
				if ($resultado>0) 
				{
					$resul=1;
				}				
			}

		mysqli_close($conn);
		return $resul;
	} 
	public function competencia_actividad_diciplinar($curso,$competencia,$actividad)
	{
		require '../model/conexion.php';
		$resu=0;	

		$diciplinar=$conn->prepare("select * from curso_diciplinar where clave_competencia=? and id_actividad=?;");
		$diciplinar->bind_param("si",$competencia, $actividad);
		$diciplinar->execute();
		$error=$diciplinar->errno;
		$diciplinar->store_result();
		$rows=$diciplinar->num_rows();
		
		$diciplinar->close();

		echo "rows::::::::::::{$rows}:::::::::::::::::::";
			if ($rows==0)
			{
				$new_actividaddd=$conn->prepare("insert into curso_diciplinar (clave_curso,clave_competencia,id_actividad) values (?, ?, ?);");
				$new_actividaddd->bind_param("isi",$curso, $competencia, $actividad);
				$c=$new_actividaddd->execute();
				$error2=$new_actividaddd->errno;
				$new_actividaddd->store_result();
				$resultad=$new_actividaddd->affected_rows;
				$new_actividaddd->close();
				echo "---{$error2}----";
				if ($resultad>0) 
				{
					$resu=1;
				}				
			}

		mysqli_close($conn);
		return $resu;
	} 
	public function competencia_actividad_profesional($curso,$competencia,$actividad)
	{
		require '../model/conexion.php';
		$res=0;	


		$consulta_cla=$conn->prepare("select * from curso_profesional where clave_competencia=? and id_actividad=?;");
			$consulta_cla->bind_param("si",$competencia, $actividad);
			$consulta_cla->execute();
			$consulta_cla->store_result();
			$resul_cla=$consulta_cla->num_rows();
			$consulta_cla->close();

			if ($resul_cla==0)
			{
				$new_actividaddd=$conn->prepare("insert into curso_profesional (clave_curso,clave_competencia,id_actividad) values (?, ?, ?);");
				$new_actividaddd->bind_param("isi",$curso, $competencia, $actividad);
				$c=$new_actividaddd->execute();
				$new_actividaddd->store_result();
				$resultad=$new_actividaddd->affected_rows;
				$new_actividaddd->close();
				if ($resultad>0) 
				{
					$res=1;
				}				
			}

		mysqli_close($conn);
		return $res;
	} 
}
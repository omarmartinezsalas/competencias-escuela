<?php



class recursos 
{
	 

	public function set($a,$b,$c,$d,$e,$f)
	{
		

	} 
	public function vertodo()
	{
		

	} 
	public function verporid($id)
	{
		
		
	} 
	public function grupos()
	{
		require_once '../model/conexion.php';		
		$consulta=mysqli_query($conn,"select clave from grupos;");	
		mysqli_close($conn);
		return $consulta;


	} 
	public function materias()
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select clave,nombre from materias;");	
		mysqli_close($conn);
		return $consult;


	} 
	public function cursos($profesor)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select * from cursos where clave_profesor='{$profesor}';");	
		mysqli_close($conn);
		return $consult;
	} 
	public function nombre_materia($clave)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select nombre from materias where clave='{$clave}';");	
		mysqli_close($conn);
		return $consult;
	}
	public function manager_curso($clave_curso)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select matricula,id,nombre,a_paterno,a_materno from alumnos,alumno_curso where alumnos.matricula=alumno_curso.matricula_alumno and clave_curso='{$clave_curso}';");	
		mysqli_close($conn);
		return $consult;
		
	} 
	
	public function actividades($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select DISTINCT entregas.calificacion,entregas.id
			from actividades,entregas,cursos,alumno_curso 
			where 
			cursos.clave=alumno_curso.clave_curso and
			entregas.id_actividad=actividades.id and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno='{$matricula}' and 
			alumno_curso.clave_curso='{$clave_curso}' and 
			actividades.parcial='{$parcial}';");	
		mysqli_close($conn);
		return $consult;
		
	} 
	public function activida_des($clave_curso,$parcial)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select  descripcion from actividades where clave_curso='{$clave_curso}' and parcial='{$parcial}'");	
		mysqli_close($conn);
		return $consult;
		
	}

	public function promedio($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select round(sum(entregas.calificacion)/count(entregas.calificacion),1)
			as promedio
			from actividades,entregas,cursos,alumno_curso 
			where actividades.id=entregas.id_actividad and
			cursos.clave=alumno_curso.clave_curso and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno='{$matricula}' and 
			alumno_curso.clave_curso='{$clave_curso}' and actividades.parcial='{$parcial}';");	
		mysqli_close($conn);
		return $consult;
		
	}
	//experimental
	public function actividades_tipo($clave_curso,$parcial)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select descripcion,tipo from actividades where clave_curso='{$clave_curso}' and parcial='{$parcial}'");	
		mysqli_close($conn);
		return $consult;
		
	} 
	public function actividades_simple($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select DISTINCT entregas.calificacion,entregas.id,tipo
			from actividades,entregas,cursos,alumno_curso 
			where 
			cursos.clave=alumno_curso.clave_curso and
			entregas.id_actividad=actividades.id and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno='{$matricula}' and 
			alumno_curso.clave_curso='{$clave_curso}' and 
			actividades.parcial='{$parcial}';");	
		mysqli_close($conn);
		return $consult;
		
	}
	public function actividades_alumno_calificacion($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select DISTINCT entregas.calificacion,entregas.id,tipo,descripcion,actividades.id
			from actividades,entregas,cursos,alumno_curso 
			where 
			cursos.clave=alumno_curso.clave_curso and
			entregas.id_actividad=actividades.id and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno='{$matricula}' and 
			alumno_curso.clave_curso='{$clave_curso}' and 
			actividades.parcial='{$parcial}' and tipo='continua';");	
		mysqli_close($conn);
		return $consult;
		
	}
	public function com_act_gen($id)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select * from curso_generica where id_actividad='{$id}';");	
		mysqli_close($conn);
		return $consult;
	}
	public function com_act_dic($id)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select * from curso_diciplinar where id_actividad='{$id}';");	
		mysqli_close($conn);
		return $consult;
	}
	public function com_act_pro($id)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select * from curso_profesional where id_actividad='{$id}';");	
		mysqli_close($conn);
		return $consult;
	}
	public function descripcion_generica($id)
	{
		require '../model/conexion.php';		
		$consult=mysqli_query($conn,"select * from atributos where id='{$id}';");	
		mysqli_close($conn);
		return $consult;
	}
	public function promedio_examen($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';		
		$examen=$conn->prepare("select ((sum(entregas.calificacion)/count(entregas.calificacion))*20)/100

			as promedio
			from actividades,entregas,cursos,alumno_curso 
			where actividades.id=entregas.id_actividad and
			cursos.clave=alumno_curso.clave_curso and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno=? and 
			alumno_curso.clave_curso=? and actividades.parcial=? and tipo='examen';");
			$examen->bind_param("sii",$matricula,$clave_curso,$parcial);
			$examen->execute();
			$cantidad=$examen->get_result();
			$fila=$cantidad->fetch_assoc();
			$examen->close();
			$consult=$fila['promedio'];
		
		return $consult;
		
	}
	public function promedio_orientacion($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';		
		$orientacion=$conn->prepare("select ((sum(entregas.calificacion)/count(entregas.calificacion))*10)/100
			as promedio
			from actividades,entregas,cursos,alumno_curso 
			where actividades.id=entregas.id_actividad and
			cursos.clave=alumno_curso.clave_curso and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno=? and 
			alumno_curso.clave_curso=? and actividades.parcial=? and tipo='orientacion';");
			$orientacion->bind_param("sii",$matricula,$clave_curso,$parcial);
			$orientacion->execute();
			$cantidad=$orientacion->get_result();
			$fila=$cantidad->fetch_assoc();
			$orientacion->close();
			$consult=$fila['promedio'];
		
		return $consult;
		
	}
	public function promedio_tutoria($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';

		$tutoria=$conn->prepare("select ((sum(entregas.calificacion)/count(entregas.calificacion))*10)/100
			as promedio
			from actividades,entregas,cursos,alumno_curso 
			where actividades.id=entregas.id_actividad and
			cursos.clave=alumno_curso.clave_curso and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno=? and 
			alumno_curso.clave_curso=? and actividades.parcial=? and tipo='tutoria';");
			$tutoria->bind_param("sii",$matricula,$clave_curso,$parcial);
			$tutoria->execute();
			$cantidad=$tutoria->get_result();
			$fila=$cantidad->fetch_assoc();
			$tutoria->close();
			$consult=$fila['promedio'];
			return $consult;
		
	}
	public function promedio_extra($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';	
		$consulta=$conn->prepare("select ((sum(entregas.calificacion)/count(entregas.calificacion))*10)/100
			as promedio
			from actividades,entregas,cursos,alumno_curso 
			where actividades.id=entregas.id_actividad and
			cursos.clave=alumno_curso.clave_curso and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno=? and 
			alumno_curso.clave_curso=? and actividades.parcial=? and tipo='extra';");	
		$consulta->bind_param("sii",$matricula,$clave_curso,$parcial);
		$consulta->execute();

		$resultado = $consulta->get_result();
		$fila = $resultado->fetch_assoc();
		$consulta->close();
		$con=$fila['promedio'];
		
		
		return $con;
		
	}
	public function promedio_continua($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';	
		$consulta=$conn->prepare("select ((sum(entregas.calificacion)/count(entregas.calificacion))*60)/100
			as promedio
			from actividades,entregas,cursos,alumno_curso 
			where actividades.id=entregas.id_actividad and
			cursos.clave=alumno_curso.clave_curso and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno=? and 
			alumno_curso.clave_curso=? and actividades.parcial=? and tipo='continua';");	
		$consulta->bind_param("sii",$matricula,$clave_curso,$parcial);
		$consulta->execute();

		$resultado = $consulta->get_result();
		$fila = $resultado->fetch_assoc();
		$consulta->close();
		$con=$fila['promedio'];
		
		
		return $con;
		
	}
	public function promedio_continua2($clave_curso,$matricula,$parcial)
	{
		require '../model/conexion.php';	
		$consulta=$conn->prepare("select ((sum(entregas.calificacion)/count(entregas.calificacion))*60)/100
			as promedio
			from actividades,entregas,cursos,alumno_curso 
			where actividades.id=entregas.id_actividad and
			cursos.clave=alumno_curso.clave_curso and
			actividades.clave_curso=cursos.clave and
			alumno_curso.id=entregas.clave_alumno_curso and
			alumno_curso.matricula_alumno=? and 
			alumno_curso.clave_curso=? and actividades.parcial=? and tipo='continua';");	
		$consulta->bind_param("sii",$matricula,$clave_curso,$parcial);
		$consulta->execute();

		$resultado = $consulta->get_result();
		
		$consulta->close();
		
		
		
		return $resultado;
		
	}


}


?>
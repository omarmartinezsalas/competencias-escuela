<?php

class competencia_generica 
{
	public function vertodo()
	{
		require '../model/conexion.php';
			//$rawdata = array();

			//$i=0;
		$result=mysqli_query($conn,"select * from competencias_genericas;");
		  //while ($row = mysqli_fetch_row($result)) {
                //echo"    {$row[0]}    {$row[1]}    {$row[2]}    <br>";
		  //		 $rawdata[$i] = $row;
        	//	 $i++;
          //  }	
		  

		mysqli_close($conn);	
		//return $result;
		return $result;
	} 
	public function verporid($clave)
	{
		require '../model/conexion.php';

		$consulta=$conn->prepare("select descripcion,categoria from competencias_genericas where clave=?;");
			$consulta->bind_param("s",$clave);
			$consulta->execute();
			$respuesta=$consulta->get_result();
			$consulta->close();
			return $respuesta;
	} 
	public function nueva($clave, $descripcion, $categoria)
	{
		require '../model/conexion.php';

		mysqli_query($conn,"insert into competencias_genericas (clave, descripcion, categoria) values ('".$clave."','".$descripcion."','".$categoria."');");	

		mysqli_close($conn);
	} 
	public function borrar($clave)
	{
		require '../model/conexion.php';
		mysqli_query($conn,"delete from competencias_genericas where clave='".$clave."';");
			mysqli_close($conn);
	} 
	public function editar()
	{
		
	} 
	public function ver_competencias()
	{
		require '../model/conexion.php';	
		$result=mysqli_query($conn,"select * from competencias_genericas ORDER BY categoria;");
		mysqli_close($conn);	
		return $result;
	} 
	public function ver_atributos($competencia)
	{
		require '../model/conexion.php';	
		$result=mysqli_query($conn,"select * from atributos where clave_competencia='{$competencia}';");
		mysqli_close($conn);	
		return $result;
	} 	
	public function agregar_competencia_curso($curso,$competencia,$parcial)
	{
		require_once '../model/conexion.php';
		$c=mysqli_query($conn,"select * from c_generica where clave_curso='{$curso}' and clave_competencia='{$competencia}' and parcial='{$parcial}' ;");
		echo"affect roe=  ".mysqli_num_rows($c)."    ";
		if(mysqli_num_rows($c)==0)
		{
			mysqli_query($conn,"insert into c_generica (clave_curso,clave_competencia,parcial) values ('{$curso}','{$competencia}','{$parcial}');");
			echo"agregado";
		}else
		{
			echo"ya existe";
		}

		
			mysqli_close($conn);
	}
	public function eliminar_competencia_curso($curso,$competencia,$parcial)
	{
		require_once '../model/conexion.php';
		$c=mysqli_query($conn,"delete from c_generica where clave_curso='{$curso}' and clave_competencia='{$competencia}' and parcial='{$parcial}';");

		$d=mysqli_query($conn,"delete from curso_generica where clave_curso='{$curso}' and clave_competencia='{$competencia}';");
			echo"affect roe=  ".mysqli_num_rows($c)."    ";
			mysqli_close($conn);
	}  
	public function eliminar_competencia_actividad($curso,$competencia)
	{
		require_once '../model/conexion.php';
		$c=mysqli_query($conn,"delete from curso_generica where clave_curso='{$curso}' and clave_competencia='{$competencia}';");
			echo"affect roe=  ".mysqli_num_rows($c)."    ";
			mysqli_close($conn);
	} 
	public function ver_competencias_curso($curso,$parcial)
	{
		require '../model/conexion.php';

		$result=mysqli_query($conn,"select atributos.descripcion,atributos.clave_competencia,atributos.id,competencias_genericas.categoria from atributos,c_generica,competencias_genericas where c_generica.clave_competencia=atributos.id and atributos.clave_competencia=competencias_genericas.clave and c_generica.clave_curso='{$curso} ' and parcial='{$parcial}';");
		if(mysqli_affected_rows($conn)==0)
		{
			$result=null;
		}
		mysqli_close($conn);
		return $result;	
	} 
	public function ver_atributo_seleccionada_curso($curso)
	{
		require '../model/conexion.php';

		$result=mysqli_query($conn,"select atributos.clave_competencia,atributos.descripcion,competencias_genericas.categoria,atributos.id from atributos,c_generica,competencias_genericas where c_generica.clave_competencia=atributos.id and atributos.clave_competencia=competencias_genericas.clave and c_generica.clave_curso='{$curso} ';");
		if(mysqli_affected_rows($conn)==0)
		{
			$result=null;
		}
		mysqli_close($conn);
		return $result;	
	} 
	public function ver_competencias_filtro($categoria)
	{
		require '../model/conexion.php';	
		$result=mysqli_query($conn,"select * from competencias_genericas where categoria='{$categoria}';");
		mysqli_close($conn);	
		return $result;
	} 
	public function buscar($clave)
	{
		require '../model/conexion.php';	

		$descripcion=$conn->prepare("select atributos.descripcion, competencias_genericas.descripcion from atributos,competencias_genericas where atributos.clave_competencia=competencias_genericas.clave and atributos.id=?;");
		$descripcion->bind_param("i", $clave);
		$descripcion->execute();
		$resultado = $descripcion->get_result();
		
		$descripcion->close();

		return $resultado;
	} 
	public function buscar_con_curso_generica($clave)
	{
		require '../model/conexion.php';	

		$descripcion=$conn->prepare("select curso_generica.clave_competencia from curso_generica where clave_curso=?;");
		$descripcion->bind_param("i", $clave);
		$descripcion->execute();
		$resultado = $descripcion->get_result();
		
		$descripcion->close();

		return $resultado;
	} 
	public function buscar_con_c_generica($clave,$parcial)
	{
		require '../model/conexion.php';	

		$descripcion=$conn->prepare("select c_generica.clave_competencia from c_generica where clave_curso=? and parcial=?;");
		$descripcion->bind_param("ii", $clave,$parcial);
		$descripcion->execute();
		$resultado = $descripcion->get_result();
		
		$descripcion->close();

		return $resultado;
	} 
	public function contar_con_c_generica($clave,$parcial)
	{
		require '../model/conexion.php';	

		$descripcion=$conn->prepare("select count(c_generica.clave_competencia) from c_generica where clave_curso=? and parcial=?;");
		$descripcion->bind_param("ii", $clave,$parcial);
		$descripcion->execute();
		$resultado = $descripcion->get_result();
		$c=$resultado->fetch_row();
		$row=$c[0];
		
		$descripcion->close();

		return $row;
	}
	public function actividades_con_competencia($clave)
	{
		require '../model/conexion.php';	

		$descripcion=$conn->prepare("select distinct curso_generica.clave_competencia,actividades.id from curso_generica,actividades,entregas,cursos,alumno_curso,alumnos where cursos.clave=alumno_curso.clave_curso and cursos.clave=actividades.clave_curso and actividades.id=entregas.id_actividad and actividades.id=curso_generica.id_actividad and alumno_curso.matricula_alumno=alumnos.matricula and matricula='09415082050064' and cursos.clave='31' and actividades.parcial='1';");
		$descripcion->bind_param("i", $clave);
		$descripcion->execute();
		$resultado = $descripcion->get_result();
		
		$descripcion->close();

		return $resultado;
	} 
	public function arreglo_competencias_generales($clave,$parcial)
	{
		require '../model/conexion.php';	
		$arreglo=array();
		$i=0;
		$descripcion=$conn->prepare("select c_generica.clave_competencia from c_generica where clave_curso=? and parcial=?;");
		$descripcion->bind_param("ii", $clave,$parcial);
		$descripcion->execute();
		$resultado = $descripcion->get_result();

		if (mysqli_num_rows($resultado)>0) 
		{
			while ($clave_competencia=mysqli_fetch_row($resultado)) 
			{
				$arreglo[$i]=$clave_competencia[0];
				$i+=1;

			}
		}else
		{
			$resultado=null;
		}

		$descripcion->close();

		return $arreglo;
	} 
}
?> 
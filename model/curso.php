<?php



class curso 
{
	 
	public function nueva($a,$b,$c)
	{
		require '../model/conexion.php';

		mysqli_query($conn,"insert into cursos (clave_materia,clave_grupo,clave_profesor) values ('".$a."','".$b."','".$c."');");	
		$curso=mysqli_query($conn,"select max(clave) from cursos;");
		while($row=mysqli_fetch_row($curso))
		{
			$clave=$row[0];
		}				
		$alumnos=mysqli_query($conn,"select matricula from alumnos where clave_grupo='{$b}';");		
		

		while($raw=mysqli_fetch_row($alumnos))
		{
			mysqli_query($conn,"insert into alumno_curso (matricula_alumno,clave_curso) values('".$raw[0]."','".$clave."');");

		}		
		mysqli_close($conn);
		return $clave;
	} 
	public function evaluacion($parcial,$tipo,$c)
	{
		require '../model/conexion.php';
		//$fecha=datatime();
		$r=0;
		$fecha_actual = new DateTime();
		$fecha = $fecha_actual->format("Y/m/d");
		//$fech="".$fecha." ";
		$fech=settype($fecha, "string");

		$res=mysqli_query($conn,"insert into actividades (descripcion,clave_curso,fecha_entrega,parcial,tipo) values ('{$tipo}','{$c}','{$fech}','{$parcial}','{$tipo}');");
		
		$id_actividad=mysqli_query($conn,"select max(id) from actividades;");
		while($row=mysqli_fetch_row($id_actividad))
		{	
				$id=$row[0];

		}
		$curso=mysqli_query($conn,"select id from alumno_curso where clave_curso='{$c}';");
		while($row=mysqli_fetch_row($curso))
		{	
				mysqli_query($conn,"insert into entregas (clave_alumno_curso,id_actividad,calificacion) values ('{$row[0]}','{$id}','0')");
		}
		
		mysqli_close($conn);
		return $r;
	} 
	public function borrar($clave)
	{
		require '../model/conexion.php';

		$delete=mysqli_query($conn,"delete from cursos where clave='{$clave}';");	
		
		
		mysqli_close($conn);
		
	} 
	public function criterios($clave)
	{
		require '../model/conexion.php';
		$criterios=mysqli_query($conn,"insert into criterios (clave_curso) values ('{$clave}');");	
		mysqli_close($conn);
		
	} 
	public function profesor($clave)
	{
		require '../model/conexion.php';
			
		
			$consulta_clave=$conn->prepare("select clave_profesor from cursos where clave=?;");
			$consulta_clave->bind_param("i",$clave);
			$consulta_clave->execute();
			$consulta=$consulta_clave->get_result();
			$row=$consulta->fetch_row();
			$resu=$row[0];
			$consulta_clave->close();

			return $resu;
		
	} 
		public function grupo($clave)
	{
		require '../model/conexion.php';
			
		
			$consulta_clave=$conn->prepare("select clave_grupo from cursos where clave=?;");
			$consulta_clave->bind_param("i",$clave);
			$consulta_clave->execute();
			$consulta=$consulta_clave->get_result();
			$row=$consulta->fetch_row();
			$resu=$row[0];
			$consulta_clave->close();

			return $resu;
		
	} 
	public function clave_materia($clave)
	{
		require '../model/conexion.php';	
			$consulta_clave=$conn->prepare("select clave_materia from cursos where clave=?;");
			$consulta_clave->bind_param("i",$clave);
			$consulta_clave->execute();
			$consulta=$consulta_clave->get_result();
			$row=$consulta->fetch_row();
			$resu=$row[0];
			$consulta_clave->close();
			return $resu;
	} 
		public function nombre_materia($clave)
	{
		require '../model/conexion.php';	
			$consulta_clave=$conn->prepare("select nombre from materias where clave=?;");
			$consulta_clave->bind_param("s",$clave);
			$consulta_clave->execute();
			$consulta=$consulta_clave->get_result();
			$row=$consulta->fetch_row();
			$resu=$row[0];
			$consulta_clave->close();
			return $resu;
	} 
	




}
?>
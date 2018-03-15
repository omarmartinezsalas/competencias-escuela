<?php



class actividad 
{
	 


	public function ver($clave_curso,$parcial)
	{
		require '../model/conexion.php';

		$consulta=mysqli_query($conn,"select DISTINCTROW
 		actividades.descripcion,actividades.parcial,actividades.id,actividades.tipo from actividades,entregas where actividades.id=entregas.id_actividad and clave_curso='{$clave_curso}' and parcial='{$parcial}';");	
		
		
		mysqli_close($conn);
		return $consulta;
		
	} 
	public function nueva($a,$b,$c,$d)
	{
		require '../model/conexion.php';

		$query=mysqli_query($conn,"insert into colegio.actividades (descripcion,clave_curso,fecha_entrega,parcial) values ('".$a."','".$b."','".$c."','".$d."');");
		
		$id_actividad=mysqli_query($conn,"select max(id) from actividades;");
		while($row=mysqli_fetch_row($id_actividad))
		{	
				$id=$row[0];

		}
		$curso=mysqli_query($conn,"select id from alumno_curso where clave_curso='{$b}';");
		while($row=mysqli_fetch_row($curso))
		{	
				mysqli_query($conn,"insert into entregas (clave_alumno_curso,id_actividad,calificacion) values ('{$row[0]}','{$id}','0')");
		}
		
		
		mysqli_close($conn);
		return $id;
	} 
	public function evaluacion($parcial,$tipo,$c)
	{
		require '../model/conexion.php';
		$date=date();
		mysqli_query($conn,"insert into colegio.actividades (descripcion,clave_curso,fecha_entrega,parcial) values ('".$tipo."','".$c."','".$date."','".$parcial."');");

		$id_actividad=mysqli_query($conn,"select max(id) from actividades;");
		while($row=mysqli_fetch_row($id_actividad))
		{	
				$id=$row[0];

		}
		$curso=mysqli_query($conn,"select id from alumno_curso where clave_curso='{$c}';");
		while($row=mysqli_fetch_row($curso))
		{	
				mysqli_query($conn,"insert into entregas (clave_alumno_curso,id_actividad,calificacion) values ('{$row[0]}','{$id}','10')");
		}
		mysqli_close($conn);
	} 
	public function borrar($clave)
	{
		require '../model/conexion.php';
		mysqli_query($conn,"delete from actividades where id='{$clave}';");
		mysqli_close($conn);
	} 
	public function editar()
	{

		
	} 
	public function calificar_actividad($clave,$calificacion)
	{
		require '../model/conexion.php';
		mysqli_query($conn,"update entregas set calificacion='{$calificacion}' where id='{$clave}' ;");
		mysqli_close($conn);
		
	}
	
	




}
?>
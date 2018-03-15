<?php



class competencia_profesional 
{
	 

	public function vertodo()
	{
		require_once '../model/conexion.php';

		$result=mysqli_query($conn,"select * from colegio.competencias_profesionales;");
		  //while ($row = mysqli_fetch_row($result)) {
              //  echo"    {$row[0]}    {$row[1]}    {$row[2]}    <br>";
            //}	

		mysqli_close($conn);
		return $result;

	} 
	public function verporid($id)
	{
		require_once '../model/conexion.php';

		$result=mysqli_query($conn,"select * from colegio.competencias_profesionales where clave='".$clave."'; ");
		  while ($row = mysqli_fetch_row($result)) {
                echo"    {$row[0]}    {$row[1]}    {$row[2]}    <br>";
            }	

		mysqli_close($conn);
		
	} 
	public function nueva($clave, $descripcion, $categoria,$nivel)
	{
		require_once '../model/conexion.php';

		mysqli_query($conn,"insert into colegio.competencias_profesionales (clave, descripcion, categoria,nivel) values ('".$clave."','".$descripcion."','".$categoria."','".$nivel."');");	

		mysqli_close($conn);
	} 
	public function borrar($clave)
	{
		require_once '../model/conexion.php';
		mysqli_query($conn,"delete from colegio.competencias_profesionales where clave='".$clave."';");
			mysqli_close($conn);
	} 
	public function editar()
	{
		
	} 
	public function agregar_competencia_curso($curso,$competencia,$parcial)
	{
		require_once '../model/conexion.php';
		$c=mysqli_query($conn,"select * from colegio.c_profesional where clave_curso='{$curso}' and clave_competencia='{$competencia}' and parcial='{$parcial}';");
		echo"affect roe=  ".mysqli_num_rows($c)."    ";
		if(mysqli_num_rows($c)==0)
		{
			mysqli_query($conn,"insert into colegio.c_profesional (clave_curso,clave_competencia,parcial) values ('{$curso}','{$competencia}','{$parcial}');");
			echo"agregado";
		}else
		{
			echo"ya existe";
		}

		
			mysqli_close($conn);
	} 
	public function eliminar_competencia_curso($curso,$competencia,$parcial)
	{
		require '../model/conexion.php';
		$c=mysqli_query($conn,"delete from colegio.c_profesional where clave_curso='{$curso}' and clave_competencia='{$competencia}' and parcial='{$parcial}';");
		echo"affect roe=  ".mysqli_num_rows($c)."    ";
		
			mysqli_close($conn);
	} 
	public function ver_competencias_curso($curso,$parcial)
	{
		require '../model/conexion.php';

		$result=mysqli_query($conn,"select descripcion,categoria,nivel,clave_competencia from competencias_profesionales,c_profesional where c_profesional.clave_competencia=competencias_profesionales.clave and c_profesional.clave_curso='{$curso}' and parcial='{$parcial}';");
		  //while ($row = mysqli_fetch_row($result)) {
              //  echo"    {$row[0]}    {$row[1]}    {$row[2]}    <br>";
            //}	
		if(mysqli_affected_rows($conn)==0)
		{
			$result=null;
		}
		mysqli_close($conn);
		return $result;	
	} 
	public function ver_filtro($categoria,$nivel)
	{
		require '../model/conexion.php';
		$consulta=$conn->prepare("select * from competencias_profesionales where categoria=? and nivel=?;");
		$consulta->bind_param("ss",$categoria,  $nivel);
		$consulta->execute();
		$datos=$consulta->store_result();
		$resul=$consulta->num_rows();
		$consulta->close();

		mysqli_close($conn);
		return $datos;		
	} 
		public function filtro($categoria,$nivel)
	{
		require '../model/conexion.php';

		$result=mysqli_query($conn,"select * from competencias_profesionales where categoria='{$categoria}' and nivel='{$nivel}';");
		  //while ($row = mysqli_fetch_row($result)) {
              //  echo"    {$row[0]}    {$row[1]}    {$row[2]}    <br>";
            //}	
		if(mysqli_affected_rows($conn)==0)
		{
			$result=null;
		}
		mysqli_close($conn);
		return $result;	
	} 
	//ultimo
		public function buscar($clave)
	{
		require '../model/conexion.php';	

		$descripcion=$conn->prepare("select descripcion,categoria from competencias_profesionales where clave=?;");
		$descripcion->bind_param("s", $clave);
		$descripcion->execute();
		$resultado = $descripcion->get_result();
		
		$descripcion->close();

		return $resultado;
	} 
	public function buscar_con_curso_generica($clave)
	{
		require '../model/conexion.php';	

		$descripcion=$conn->prepare("select curso_profesional.clave_competencia from curso_profesional where clave_curso=?;");
		$descripcion->bind_param("i", $clave);
		$descripcion->execute();
		$resultado = $descripcion->get_result();
		
		$descripcion->close();

		return $resultado;
	} 
	public function buscar_con_c_generica($clave,$parcial)
	{
		require '../model/conexion.php';	

		$descripcion=$conn->prepare("select c_profesional.clave_competencia from c_profesional where clave_curso=? and parcial=?;");
		$descripcion->bind_param("ii", $clave,$parcial);
		$descripcion->execute();
		$resultado = $descripcion->get_result();
		
		$descripcion->close();

		return $resultado;
	} 
	public function contar_con_c_generica($clave,$parcial)
	{
		require '../model/conexion.php';	

		$descripcion=$conn->prepare("select count(c_profesional.clave_competencia) from c_profesional where clave_curso=? and parcial=?;");
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

		$descripcion=$conn->prepare("select distinct curso_profesional.clave_competencia,actividades.id from curso_profesional,actividades,entregas,cursos,alumno_curso,alumnos where cursos.clave=alumno_curso.clave_curso and cursos.clave=actividades.clave_curso and actividades.id=entregas.id_actividad and actividades.id=curso_generica.id_actividad and alumno_curso.matricula_alumno=alumnos.matricula and matricula='09415082050064' and cursos.clave='31' and actividades.parcial='1';");
		$descripcion->bind_param("i", $clave);
		$descripcion->execute();
		$resultado = $descripcion->get_result();
		
		$descripcion->close();

		return $resultado;
	} 




}
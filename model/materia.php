<?php



class materia
{
	 
	public function nueva($a,$b,$c)
	{
		require '../model/conexion.php';
		$consulta=$conn->prepare("insert into materias (clave,nombre,creditos) values (?,?,?);");
		$consulta->bind_param("ssi",$a,$b,$c);
		$consulta->execute();
		$resultado=$consulta->affected_rows;
		$consulta->close();

		return $resultado;
	} 
	public function ver()
	{
		require '../model/conexion.php';
		$consulta=$conn->prepare("select * from materias ORDER BY nombre;");
		$consulta->execute();
		$r=$consulta->get_result();
		$consulta->close();
		return $r;
	} 
	public function editar($a,$b,$c,$d)
	{
		require '../model/conexion.php';
		$consulta=$conn->prepare("update materias set clave=?, nombre=?, creditos=? where clave=?;");
		$consulta->bind_param("ssis",$b,$c,$d,$a);
		$consulta->execute();
		$resultado=$consulta->affected_rows;
		$consulta->close();

		return $resultado;
	} 




}
?>
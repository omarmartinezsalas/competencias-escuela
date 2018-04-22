<?php



class grupo 
{
	 


	public function vertodo()
	{
		require '../model/conexion.php';		
		$consulta=mysqli_query($conn,"select clave from grupos;");	
		mysqli_close($conn);
		return $consulta;

	} 
	public function verporid($id)
	{
		
		
	} 
	public function nueva($a,$b,$c,$p)
	{
		require '../model/conexion.php';

		$consulta=mysqli_query($conn,"insert into grupos (clave,turno,carrera,cicloescolar) values ('{$a}','{$b}','{$c}','{$p}');");	
		$n=mysqli_affected_rows($conn);
		mysqli_close($conn);
		return $n;
	} 
	public function borrar($clave)
	{
		
	} 
	public function editar()
	{

		
	} 
	function grupos_info($ciclo)
	{
		require '../model/conexion.php';		
		$consulta=mysqli_query($conn,"select * from grupos where cicloescolar='{$ciclo}';");	
		mysqli_close($conn);
		return $consulta;
	}
		function ciclo_escolar()
	{
		require '../model/conexion.php';		
		$consulta=mysqli_query($conn,"select cicloescolar from grupos;");	
		mysqli_close($conn);
		return $consulta;
	}
	




}
?>
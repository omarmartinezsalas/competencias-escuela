<?php



class grupo 
{
	 

	public function set()
	{

	} 
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
	public function nueva($a,$b,$c)
	{
		require_once '../model/conexion.php';

		mysqli_query($conn,"insert into colegio.grupos (clave,turno,carrera) values ('".$a."','".$b."','".$c."');");	

		mysqli_close($conn);
	} 
	public function borrar($clave)
	{
		
	} 
	public function editar()
	{

		
	} 
	
	




}
?>
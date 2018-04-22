<?php



class alumno 
{
	 private $clave;
	 private $nombre;
	 private $a_paterno;
	 private $a_materno;
	 private $correo;
	 private $contraseña;

	public function set($a,$b,$c,$d,$e,$f)
	{
		$this->$clave=$a;
		$this->$nombre=$b;
		$this->$a_paterno=$c;
		$this->$a_materno=$d;
		$this->$correo=$e;
		$this->$contraseña=$f;

	} 
	public function vertodo()
	{
		return $this->$clave;
		return $this->$nombre;
		return $this->$a_paterno;
		return $this->$a_materno;
		return $this->$correo;
		return $this->$contraseña;

	} 
	public function verporid($id)
	{
		
		
	} 
	public function nueva($a,$b,$c,$d,$e,$f,$g)
	{
		require '../model/conexion.php';

		$consulta=mysqli_query($conn,"insert into alumnos (matricula,nombre,a_paterno,a_materno,sexo,fecha_nacimiento,clave_grupo) values ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."');");


		$r=mysqli_affected_rows($conn);	

		mysqli_close($conn);
		return $r;
	} 
	public function borrar($clave)
	{
		
	} 
	public function editar()
	{

		
	} 
	function listar_alumnos($grupo)
	{
		require '../model/conexion.php';
		$consulta=mysqli_query($conn,"select * from alumnos where clave_grupo='{$grupo}';");	

		mysqli_close($conn);
		return $consulta;
	}
}
?>
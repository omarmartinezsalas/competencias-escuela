<?php



class atributo
{
	 

	public function vertodo()
	{
		require_once '../model/conexion.php';

		$result=mysqli_query($conn,"select * from atributos;");
		  //while ($row = mysqli_fetch_row($result)) {
              //  echo"    {$row[0]}    {$row[1]}    {$row[2]}    <br>";
            //}	

		mysqli_close($conn);
		return $result;

	} 
	public function verporid($id)
	{
		require_once '../model/conexion.php';

		$result=mysqli_query($conn,"select * from atributos where clave='".$clave."'; ");
		  while ($row = mysqli_fetch_row($result)) {
                echo"    {$row[0]}    {$row[1]}    {$row[2]}    <br>";
            }	

		mysqli_close($conn);
		
	} 
	public function nueva($descripcion, $clave_competencia)
	{
		require_once '../model/conexion.php';

		mysqli_query($conn,"insert into atributos (descripcion, clave_competencia) values ('".$descripcion."','".$clave_competencia."');");	

		mysqli_close($conn);
	} 
	public function borrar($clave)
	{
		require_once '../model/conexion.php';
		mysqli_query($conn,"delete from atributos where id='".$clave."';");
			mysqli_close($conn);
	} 
	public function editar()
	{
		
	} 
	
		




}
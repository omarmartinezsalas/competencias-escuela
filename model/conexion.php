<?php



//class conexion
//	 private $usuario="root";
//	  public $contrasena="";
	


//	public function conecta()
//	{

		//host, usuario, contraseña, base de datos

		$conn = new mysqli("localhost", "root", "","colegio");//local
		//$conn = new mysqli("localhost", "id5148724_cecytemlapaz", "cecytemlapaz","id5148724_colegio");//servidor
		// Check connection
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
//		return $conn;
		} 
		//echo "Connected successfully";
		




//	}





//}

?> 
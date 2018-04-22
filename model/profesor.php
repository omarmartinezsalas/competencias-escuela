<?php



class profesor
{
	
	public function nueva($clave,$nombre,$a_paterno,$a_materno,$correo,$hash)
	{
		//error clave repetida=1, correo repetido=2, 
			require '../model/conexion.php';
			$error=0;
			$consulta_clave=$conn->prepare("select clave from profesores where clave=?;");
			$consulta_clave->bind_param("s",$clave);
			$cr=$consulta_clave->execute();
			$consulta_clave->store_result();
			$resul_clave=$consulta_clave->num_rows();
			$consulta_clave->close();
			
			//echo "cr  {$resul_clave}";

			$consulta_correo=$conn->prepare("select clave from profesores where correo=?;");
			$consulta_correo->bind_param("s",$correo);
			$mr=$consulta_correo->execute();
			$consulta_correo->store_result();
			$resul_correo=$consulta_correo->num_rows();
			$consulta_correo->close();

			$inserta=$conn->prepare("insert into profesores 
				(clave,nombre,a_paterno,a_materno,correo,contrasena) 
				values (?, ?, ?, ?, ?, ?);");
			$inserta->bind_param('ssssss', $clave,$nombre,$a_paterno, $a_materno, $correo,$hash);

			//$cr=mysqli_query($conn,"select clave from colegio.profesores where clave='{$clave}';");
			//$mr=mysqli_query($conn,"select clave from colegio.profesores where correo='{$correo}';");
			//$compara=mysqli_num_rows($cr);
			if ($resul_clave<1) 
			{

				if ($resul_correo<1) 
				{
					$inserta->execute();

					//mysqli_query($conn,"insert into colegio.profesores (clave,nombre,a_paterno,a_materno,correo,contrasena) values ('".$clave."','".$nombre."','".$a_paterno."','".$a_materno."','".$correo."','".$hash."');");		
				}
				else{$error=2;}
				$inserta->close();
			}
			else
			{
				$error=1;
			}
				mysqli_close($conn);
			return $error;
	} 
	public function correo($correo)
	{
		require'../model/conexion.php';
			$corre=mysqli_query($conn,"select * from profesores where correo='{$correo}';");	
		mysqli_close($conn);
		return $corre;
		
	} 
	public function verifica_correo($correo)
	{
		require'../model/conexion.php';
		//$consulta=$conn->prepare("select correo,clave from profesores where correo=?;");
		$consulta=$conn->prepare("select correo,clave from profesores where correo=?;");
		$consulta->bind_param("s", $correo);
		$eje=$consulta->execute();
		//$resultado=$consulta->store_result();
		$respuesta=$consulta->get_result();
		$num=$consulta->num_rows();
		$row=$respuesta->fetch_row();

		$consulta->close();
		if ($num<1) 
		{
			//$resultado=null;
		}else
		{
			//regresa resultado
		}

		return $respuesta;

	}
	public function borrar($clave)
	{
		require '../model/conexion.php';
			$borra=mysqli_query($conn,"delete from profesores where clave='{$clave}';");	
		mysqli_close($conn);


		return corre;
		
	}

	public function verificar($correo,$contrasena)
	{
		require '../model/conexion.php';
			$cuenta=mysqli_query($conn,"select * from profesores where correo='{$correo}';");	
			if (mysqli_num_rows($cuenta)!=0) 
			{
				while ($profe=mysqli_fetch_row($cuenta)) 
				{
					if (password_verify($contrasena,$profe[5])) 
					{
						echo "contraseña correcta";
					}else
					{
						echo "error contaseña";
						$cuenta='0';
					}		
				}
			}
			else{
					$cuenta='0';
					echo "correo incorrecto";
				}
			mysqli_close($conn);
		return $cuenta;
	} 

	public function verificar_pass($clave,$contrasena)
	{
		require '../model/conexion.php';
		$r=0;
			$cuenta=mysqli_query($conn,"select * from profesores where clave='{$clave}';");	
			if (mysqli_num_rows($cuenta)!=0) 
			{
				while ($profe=mysqli_fetch_row($cuenta)) 
				{
					if (password_verify($contrasena,$profe[5])) 
					{
						echo "contraseña correcta";
						$r=1;
					}else
					{
						echo "error contaseña <a href='../vista/editar_perfil.php'>regresar</a>";
						$cuenta='0';
						$r=0;
					}		
				}
			}
			else{
					$cuenta='0';
					$r=0;
					echo "correo incorrecto <a href='../vista/editar_perfil.php'>regresar</a>";
				}
			mysqli_close($conn);
		return $r;
	} 



	public function ruta($ruta,$clave)
	{
		require '../model/conexion.php';
			$cuenta=mysqli_query($conn,"update profesores set imagen='{$ruta}' where clave='{$clave}';");	
			mysqli_close($conn);
		return $cuenta;
	} 
	function ver($cla)
	{
		require '../model/conexion.php';
			//$cadena="{$clave}";
		
			$consulta_clave=$conn->prepare("select clave,nombre,a_paterno,a_materno,correo from profesores where clave=?;");
			$consulta_clave->bind_param("s",$cla);
			$consulta_clave->execute();
			$consulta=$consulta_clave->get_result();
			
			$consulta_clave->close();

			return $consulta;
	}
	public function verr($cla)
	{
		require '../model/conexion.php';
			$cuenta=mysqli_query($conn,"select clave,nombre,a_paterno,a_materno from profesores where clave='{$cla}';");	
			mysqli_close($conn);
		return $cuenta;
	} 
	function editar($clave,$nombre,$paterno,$materno,$correo)
	{
		require '../model/conexion.php';
			//$cadena="{$clave}";
		
			$consulta_clave=$conn->prepare("update profesores set nombre=?, a_paterno=?, a_materno=?, correo=? where clave=?;");
			$consulta_clave->bind_param("sssss",$nombre,$paterno,$materno,$correo,$clave);
			$consulta_clave->execute();
			$consulta=$consulta_clave->store_result();
			$efecto=$consulta_clave->affected_rows;
			
			$consulta_clave->close();

			return $efecto;
	}
		function editar_pass($clave,$nueva)
	{
		require '../model/conexion.php';
			//$cadena="{$clave}";
		
			$consulta_clave=$conn->prepare("update profesores set contrasena=?  where clave=?;");

			$consulta_clave->bind_param("ss",$nueva,$clave);
			$consulta_clave->execute();
			$consulta=$consulta_clave->store_result();
			$efecto=$consulta_clave->affected_rows;
			
			$consulta_clave->close();

			return $efecto;
	}
	function solicita_cambio_password($token ,$clave)
	{
		require '../model/conexion.php';
			$error=0;
			$consulta_clave=$conn->prepare("update profesores set target=? where clave=?;");
			$consulta_clave->bind_param("ss",$token, $clave);
			$consulta_clave->execute();
			$consulta_clave->store_result();
			$resul_clave=$consulta_clave->affected_rows;
			$consulta_clave->close();

			return $resul_clave;
	}
	function aceptar_cambio_password($token ,$clave_p)
	{
		require '../model/conexion.php';
			$error=0;
			$consulta=mysqli_query($conn,"select target from profesores where clave='{$clave_p}'");
			while ($r=mysqli_fetch_row($consulta)) 
			{
				echo "result{$r[0]}";
				if ($r[0]==$token) 
				{
					
				}else{
					$error=1;
				}
			}
			mysqli_close($conn);
			return $error;
	}
	function editar_pass_email($clave,$nueva)
	{
		require '../model/conexion.php';
			//$cadena="{$clave}";
			$cadena = "hola".rand(1,9999999).date('Y-m-d');
   			$token = sha1($cadena);

   			$hash = password_hash($nueva, PASSWORD_BCRYPT);
			$consulta_c=$conn->prepare("update profesores set contrasena=?, target=?  where clave=?;");
			$consulta_c->bind_param("sss",$hash,$cadena,$clave);
			$consulta_c->execute();
			$consulta_c->store_result();
			$efecto=$consulta_c->affected_rows;
			$er=$consulta_c->error;
			$consulta_c->close();
			echo "{$er}";
			return $efecto;
	}
	function editar_pass_email2($clave,$nueva)
	{
		require '../model/conexion.php';
			//$cadena="{$clave}";
			$cadena = "hola";
   			$clave="{$clave}";
   			$hash = password_hash($nueva, PASSWORD_BCRYPT);
   			echo "hash={$hash}";
   			//$consulta=$conn->query("update profesores set contrasena='{$hash}', target='{$cadena}'  where clave='{$clave}';");

   			$consulta=$conn->query("update profesores set contrasena='{$hash}'  where clave='{$clave}';");
   			$afectadas=$conn->affected_rows;
   			mysqli_close($conn);

			
			return $afectadas;
	}
	function lista()
	{
		require '../model/conexion.php';
			$cuenta=mysqli_query($conn,"select clave,nombre,a_paterno,a_materno,correo from profesores where rol='normal';");	
			mysqli_close($conn);
		return $cuenta;
	}


}
?>
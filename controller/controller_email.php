<?php
if (isset($_POST['validar']) )
{
	require '../model/profesor.php';
	$profesor=new profesor();
	$correo=$_POST['correo'];

	$result=$profesor->correo($correo);


	if (mysqli_num_rows($result)<1) 
	{
		echo "correo no existe";
	}else
	{
		//prepara el correo
		echo "<h1>Ha solicitado restaurar la contraseña</h1><br>";
		while ($v=mysqli_fetch_row($result)) 
		{
			//echo"{$v[0]}--____--{$v[4]}";
			$clave_u=$v[0];
			$correo=$v[4];

		}
		 $link=genera_link($clave_u,$correo);
		//echo "<br>{$link}";
		 $op=enviar_correo($correo,$link);
		if ($op==false) 
		{
			echo "error al enviar correo de verificacion";
			echo "<a href='../index.php'>Regresar a pagina principal</a>";
		}else
		{
			echo "Se ha enviado un correo, Si no lo ve en la bandeja principal revise la bandeja de correo no deseado";
			exit();
		}

	}

}
else
{
	echo '<script type="text/javascript">';
	echo 'window.location.href="../index.php";';
	echo '</script>';
}



function enviar_correo( $email, $link)
{
 $mensaje = '<html>
     <head>

        <title>Restablece tu contraseña</title>
     </head>
     <body>
       <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.</p>
       <p>Si hiciste esta petición, haz clic en el siguiente enlace, si no hiciste esta petición puedes ignorar este correo.</p>
       <p>
         <strong>Enlace para restablecer tu contraseña</strong><br>
         <a href="'.$link.'"> Restablecer contraseña </a>
       </p>
     </body>
    </html>';
 
   $cabeceras = 'MIME-Version: 1.0' . "\r\n";
   $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $cabeceras .= 'From: Codedrinks <slkjohanomar@gmail.com>' . "\r\n";//cambiar correo por correo institcional
   // Se envia el correo al usuario
   $enviado=mail($email, "Recuperar contraseña", $mensaje, $cabeceras);

   return $enviado;
}
function genera_link($idusuario,$correo)
{
	 // Se genera una cadena para validar el cambio de contraseña
   $cadena = $idusuario.$correo.rand(1,9999999).date('Y-m-d');
   $token = sha1($cadena);
 
  $profe=new profesor();
  $resultado=$profe->solicita_cambio_password($token,$idusuario);


   // Se inserta el registro en la tabla tblreseteopass
  //echo "<br>resultado*{$resultado}*";
   
   if($resultado>0)
   {
      // Se devuelve el link que se enviara al usuario
   	  $servidor="localhost:8080/proyectophp/vista";//local
   	  //$servidor="http://colegioclapaz.000webhostapp.com/vista";//servidor host

   	  $criptousuario=sha1($idusuario);
   	  
      //$enlace = $servidor.'/restablecer.php?idusuario='.sha1($idusuario).'&token='.$token;
      $enlace="{$servidor}/restablecer.php?idusuario={$criptousuario}&token={$token}&clave_p={$idusuario}";
      return $enlace;
   }
   else
      return FALSE;
}
function email($c)
{
	$profesor=new profesor();
	$r=$profesor->verifica_correo($c);
	echo "primero{$c}";
	if ($r==null) 
	{
		echo "no hay resultado";
	}
	while ($c=$r->fetch_row()) 
	{
		echo "{$c[0]}---";

	}


}
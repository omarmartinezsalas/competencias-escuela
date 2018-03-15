<html>
<head>
	<?php
	session_start();
	if (isset($_SESSION['clave'])) 
	{
		header("Location: ../vista/wellcome.php");
	}

	?>
	<title>Registro profesor</title>

 	<meta charset="utf-8">
    <!-- Bootstrap CSS -->
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../resource/css/bootstrap.min.css">
	<link rel="stylesheet" href="../resource/css/formularios.css">
	<link rel="stylesheet" href="../resource/icon/style.css">

<script src="../resource/js/jquery-3.2.1.min.js"></script>
</head>

<body>
	<div class="col-md-9" id="login" >
		<center><h1>Iniciar session</h1></center>
		<form id="form-registro" name="competencias" method="POST" action="../controller/sesion.php?accion=iniciar_sesion">
			<center><label>Correo</label></center>
			<center><input class="form-control" type="email" placeholder="example@mail.com" name="correo" maxlength="50" pattern="^[\w._%-]+@[\w.-]+\.[a-zA-Z]{2,4}$" required> </input> </center>
			<center><label>Contraseña</label></center>
			<center><input class="form-control"type="password" placeholder="**********" name="contrasena" maxlength="50" minlength="6" size="50" required> </input> </center>
			
			
			<center><button id="submit" class="btn-primary" type="submit" >Iniciar sesión</button></center>
		</form>		

		
	</div>
	<center><a href="../index.html"><button class="btn btn-outline-info">
		<span class="icon-home3 "></span>

	</button></a></center>
</body>
</html>

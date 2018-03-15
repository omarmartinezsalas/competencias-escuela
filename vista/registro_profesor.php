<html>
<head>
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

<div class="content">

	<form name="registro_profesor" method="post" id="form" action="../controller/controller_profesor.php?accion=agregar">
		<center><h1>Registro profesor</h1></center>
		<center><label>Clave</label></center>
		<center><input id="clave" name="clave" type="text" maxlength="8" placeholder="Clave de profesor" minlength="8" required>
		</input></center>
			<h6 id="mclave" style="color: red; text-align: center;"></h6>
		<center><label>Nombre</label></center>
		<center><input id="nombre" name="nombre" type="text" maxlength="30" placeholder="" required></input></center>
			<h6 id="mnombre" style="color: red; text-align: center;"></h6>
		<center><label>Apellido paterno</label></center>
		<center><input id="ap" name="a_paterno" type="text" maxlength="30" placeholder="" required></input></center>
			<h6 id="map" style="color: red; text-align: center;"></h6>
		<center><label>Apellido materno</label></center>
		<center><input id="am" name="a_materno" type="text" maxlength="30" placeholder="" required></input></center>
			<h6 id="mam" style="color: red; text-align: center;"></h6>
		<center><label>Correo</label></center>
		<center><input id="correo" name="correo" type="email" maxlength="80" placeholder="example@gmail.com" pattern="^[\w._%-]+@[\w.-]+\.[a-zA-Z]{2,4}$" required></input></center>
			<h6 id="mcorreo" style="color: red; text-align: center;"></h6>
		<center><label>Contraseña</label></center>
		<center><input id="pass" name="contrasena" type="password" maxlength="30" placeholder="Elige una contraseña" minlength="6" required></input></center>
			<h6 id="mcontra" style="color: red; text-align: center;"></h6>
		<center><input id="pass2" name="contrasenaa" type="password" maxlength="30" placeholder="Repite la contraseña" minlength="6" required></input></center>
			<h6 id="mcontra2" style="color: red; text-align: center;"></h6>
		<center><button type="submint" id="boton" class="btn btn-primary">Registrar</button>
			
		</center>
	</form>
</div>
	<center>
		<a href="../index.html">
			<button class="btn btn-outline-info">
				<span class="icon-home3 "></span>
			</button>
		</a>
	</center>
		<div id="mensaje">
			
		</div>
<script type="text/javascript" src="../resource/js/formulario_profesor.js"></script>
</body>
</html>










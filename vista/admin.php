<?php
 header('Content-Type: text/html; charset=UTF-8');
session_start();

if (!isset($_SESSION['clave'])) 
{
  header('Location: ../index.html');
	//echo"it works";
  exit("no ha iniciado sesion");
} else {
	if ($_SESSION['rol']=="administrador") 
	{
		
	}else
	{
		echo '<script type="text/javascript">';
		echo 'window.location.href="../vista/wellcome.php";';
		echo '</script>';	
	}
  //echo'session activada';
}
?>


<html>
<head>

	


	<title>inicio</title>
	 <!-- Required meta tags -->
    <meta charset="UTF-8">


    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 , shrink-to-fit=no , user-scalable=no">
  
<link rel="stylesheet" href="../resource/css/bootstrap.min.css">
<link rel="stylesheet" href="../resource/css/menu.css">
<link rel="stylesheet" href="../resource/icon/style.css">

<script src="../resource/js/jquery-3.2.1.min.js"></script>
<script src="../resource/js/popper.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="../resource/js/bootstrap.min.js"></script>
<!--<script src="../resource/js/vue.js"></script>--> 
<!--<script src="https://unpkg.com/axios/dist/axios.min.js"></script>-->
<script src="../resource/js/axios.min.js"></script>
<script src="../resource/js/hola.js"></script>


</head>
<body> 

<div class="content fluid" > 

	<div class="row" style="background-color:#0B0B61; color:#57BC90; padding-top: 5px; padding-bottom: 3px;">
		
		<div class="col-md-3 col-sm-3 col-xs-3  hidden-sm-down">				
		<h6 class="encabezado ">Sistema de evaluacion por competencias nivel medio superor </h6>		
		</div>
		
		<div class="col-md-3 col-sm-3 col-xs-3 hidden-sm-down">
					
			
		</div>
		<div class="col-md-3 col-sm-3 col-xs-3">
					
				<center><a class="letra">Nombre profesor: <?php echo($_SESSION['nombre']); ?></a>
			<a class="letra">Clave: <?php echo($_SESSION['clave']); ?></a></center> 
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<center>
			<a href="../controller/sesion.php?accion=cerrar_sesion"><button class="btn btn-danger"><span class="icon-switch"></span></button></a></center>
			
		</div>
	</div>
	
			
	

	
	<div class="row" style=" color:#0B0B3B;">
		<div class="col-lg-3 col-md-12 col-sm-12  col-xs-12" style="background-color: #015249;">
			<div class="fondo-azul menu"> 
				<nav class="navbar navbar-toggleable-md navbar-light" style="background-color:#015249;">
			  		<a class="navbar-brand" href="#"></a>
			  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  	    <span class="navbar-toggler-icon"></span>
			  		</button>
			  		<div class="collapse navbar-collapse" id="navbarNav">
				 	    <!--menu inicio-->
						<ul class="navbar-nav mr-auto nav-tabs">
						<center>


						<li class="nav-item">
							<?php 
							if ($_SESSION['imagen']==null)
							{
								echo "
									<center><a class='nav-link'>
									<img src='../resource/imageni/cecytem.jpg'  class='img-fluid redondo' width='40%' height='50px' align='center'>
									</img>
										</a></center>
								";
							}else
							{
								echo "
									<center><a class='nav-link'><img src='{$_SESSION['imagen']}'  class='img-fluid redondo' width='40%' height='50px' align='center'></img>
										</a></center>
								";
							}

							 ?>
							

						</li>

						
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="adm_grupos.php">Ver grupos</a></li>
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="adm_profesores.php">Ver profesores</a></li>
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="adm_materias.php">Ver materias</a></li>
						
						<hr>
						
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="registro_alumno.php">Registrar alumno</a></li>
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="registro_alumno_csv.php">Registrar alumno csv</a></li>
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="registro_grupo.php">Registrar grupo</a></li>
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="registro_materia.php">Registrar materia</a></li>

						<li><a href="editar_perfil_adm.php"><button class="btn btn-primary"><span class="icon-cog"></span></button></a></li>
						
						
						</center>
						</ul>
					</div>
				</nav>				
	  		</div>
	    </div>



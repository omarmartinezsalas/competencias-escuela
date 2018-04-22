<?php
 header('Content-Type: text/html; charset=UTF-8');
session_start();
if (!isset($_SESSION['clave'])) 
{
  header('Location: ../index.html');
	//echo"it works";
  exit("no ha iniciado sesion");

} else 
{
	if ($_SESSION['rol']=="normal") 
	{
		
	}else
	{
		echo '<script type="text/javascript">';
		echo 'window.location.href="../vista/admin.php";';
		echo '</script>';	
	}
  
}
?>


<html>
<head>

	


	<title>inicio</title>
	 <!-- Required meta tags -->
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

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
			<center><a href="editar_perfil.php"><button class="btn btn-primary"><span class="icon-cog"></span></button></a>
			<a href="../controller/sesion.php?accion=cerrar_sesion"><button class="btn btn-danger"><span class="icon-switch"></span></button></a></center>
			
		</div>
	</div>
	
			
	

	
	<div class="row" style=" color:#0B0B3B;">
		<div class="col-lg-3 col-md-12 col-sm-12  col-xs-12" style="background-color: #015249;">
			<div class="fondo-azul menu"> 
				<nav class="navbar navbar-toggleable-md navbar-light bg-light" style="background-color:#015249;"><!--navbar-light-->
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

						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="wellcome.php">Inicio</a></li>
						<?php
						if(isset($_SESSION['curso']))
						{
							echo"<li class='nav-item'><a style='color:#57BC90;' class='nav-link' href='manager_curso.php'>{$_SESSION['materia']}/{$_SESSION['grupo']}/{$_SESSION['parcial']}</a></li>";
						}
						?>
						<hr>
						<li class="nav-item">*Competencias*</li>
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="competencias_genericas.php">Genericas</a></li>
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="competencias_diciplinares.php">Disciplinares</a></li>
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="competencias_profesionales.php">Profesionales</a></li>
						<!--<li class="nav-item"><a class="nav-link" href="registro_atributos.php">Registrar atributo</a></li>-->
						<!--<li class="nav-item"><a href="registro_profesor.php">Registrar</a></li>-->
						<!--<li class="nav-item"><a href="iniciar_sesion.php">login</a></li>-->
						<hr>
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link" href="regstro_actividad.php">Registrar actividad</a></li>
						<hr>
						<!--<li class="nav-item"><a class="nav-link" href="Registro_alumno.php">registro alumno</a></li>-->
						<!--<li class="nav-item"><a class="nav-link" href="Registro_grupo.php">registro grupo</a></li>-->
						<li class="nav-item"><a style="color:#57BC90;" class="nav-link"  href="registro_curso.php">Registrar curso</a>
						
						
						</center>
						</ul>
					</div>
				</nav>				
	  		</div>
	    </div>


 


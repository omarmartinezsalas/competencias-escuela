<?php
 header('Content-Type: text/html; charset=UTF-8');
session_start();
if (!isset($_SESSION['clave'])) {
  header('Location: ../index.html');
	//echo"it works";
} else {
  //echo'session activada';
	include "../controller/controller_recursos2.php";
}
?>


<html>
<head>
	<title>Competencias</title>
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

<!--<script src="https://unpkg.com/axios/dist/axios.min.js"></script>-->
<script src="../resource/js/axios.min.js"></script>



</head>
<body> 
	<div class="content">

		<div class="col-md-12" style="background-color:#ffffff; ">
		<div class="row">
				<div class="col-md-6 col-sm-12">
					<center><img src="../resource/imageni/gobierno.jpg" class="img-fluid"></img></center>
				</div>
			
				<div class="col-md-6 col-sm-12">
					<center><img src="../resource/imageni/ceytem.gif"></img></center>
				</div>
			</div>
		</div>

		<?php
		$tipo=$_GET['competencias'];
		switch ($tipo) 
		{
			case 'genericas':
					$estring=$_SESSION['clave'];
					competencias_alumno_calificacion($_SESSION['curso'],$_SESSION['parcial'],$estring);
					listar_competencias($_SESSION['curso'],$_SESSION['parcial']);
				break;
			case 'diciplinares':
					competencias_alumno_calificacion_diciplinar($_SESSION['curso'],$_SESSION['parcial'],$_SESSION['clave']);
					listar_competencias_diciplinar($_SESSION['curso'],$_SESSION['parcial']);
				break;
			case 'profesionales':
				competencias_alumno_calificacion_pro($_SESSION['curso'],$_SESSION['parcial'],$_SESSION['clave']);
				listar_competencias_profesional($_SESSION['curso'],$_SESSION['parcial']);
				break;
			default:
				# code...
				break;
		}
		
		?>
		

	</div>




</body>
</html>

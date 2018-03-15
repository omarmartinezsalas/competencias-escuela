<?php
include "menu.php";
include "../controller/controller_recursos.php";
//include "../controller/controller_recursos2.php";


?>
	<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido" id="contenido">
		<h1>Evaluacion</h1>
		<small>Examen-20% / Orientacion-10% / tutoria-10% / Evaluacion continua-60%<br></small>
		<?php 
		

		echo"{$_SESSION['curso']}/{$_SESSION['parcial']}";
		//echo($_SESSION['clave']);
		//manager_curso($_SESSION['curso'],$_SESSION['parcial']);

		manager_curso_simple($_SESSION['curso'],$_SESSION['parcial']);
		
		competencias_genericas($_SESSION['curso'],$_SESSION['parcial']);
		competencias_diciplinares($_SESSION['curso'],$_SESSION['parcial']);
		competencias_profesionales($_SESSION['curso'],$_SESSION['parcial']);
		//echo($_GET['curso']);
		?>			

		<br>
		<center>
			<a href="evaluacion_com.php?competencias=genericas"><button class="btn btn-warning">Evaluacion genericas</button></a>
			<a href="evaluacion_com.php?competencias=diciplinares"><button class="btn btn-warning">Evaluacion diciplinares</button></a>
			<a href="evaluacion_com.php?competencias=profesionales"><button class="btn btn-warning">Evaluacion profesionales</button></a>



		</center>
	</div>


	<!--final de menu php-->		
</div>
</div>
<script type="text/javascript" src="../resource/js/calif.js"></script>
<script src="https://unpkg.com/sticky-table-headers"></script>
<script type="text/javascript">


$(document).ready(function(){
$('table').stickyTableHeaders();
});

</script>
</body>
</html>
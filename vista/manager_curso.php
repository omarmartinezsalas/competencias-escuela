<?php
include "menu.php";
include "../controller/controller_recursos.php";
//include "../controller/controller_recursos2.php";


?>
	<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido" id="contenido">
		<h1>Evaluacion parcial <?php echo "{$_SESSION['parcial']}"; ?></h1>
		<small>Examen-20% / Orientacion-10% / tutoria-10% / Evaluacion continua-60%</small>
		<a href="manual.html#parciales" align="right" target="_blank"><button class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Manual de ayuda"><span class="icon-question"></span></button></a>
		<?php 
		

		//echo"{$_SESSION['curso']}/{$_SESSION['parcial']}";
		//echo($_SESSION['clave']);
		//manager_curso($_SESSION['curso'],$_SESSION['parcial']);

		manager_curso_simple($_SESSION['curso'],$_SESSION['parcial']);
		
		competencias_genericas($_SESSION['curso'],$_SESSION['parcial']);
		competencias_diciplinares($_SESSION['curso'],$_SESSION['parcial']);
		competencias_profesionales($_SESSION['curso'],$_SESSION['parcial']);
		//echo($_GET['curso']);
		?>			

		<br>
		<table border="0">
			<tr>
				<td>
					<a href="evaluacion_pdf1.php?competencias=genericas" target="_blank"><button class="btn btn-warning">Evaluacion genericas pdf</button></a>
				</td>
				<td>
					<a href="evaluacion_pdf1.php?competencias=disciplinares" target="_blank"><button class="btn btn-warning">Evaluacion disciplinares pdf</button></a>		
				</td>
				<td>
					<a href="evaluacion_pdf1.php?competencias=profesionales" target="_blank"><button class="btn btn-warning">Evaluacion profesionales pdf</button></a>		
				</td>
			</tr>

		</table>
		
			
			
			



		
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
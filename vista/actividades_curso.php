<?php
include "menu.php";
include "../controller/controller_recursos.php";


?>
	<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
		<h1>Actividades</h1>
		<a href="manual.html#actividades" align="right" target="_blank"><button class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Manual de ayuda"><span class="icon-question"></span></button></a>
		<?php 
		//echo"{$_SESSION['curso']}/{$_SESSION['parcial']}<br>";
		actividades_cursos($_SESSION['curso']);
		echo "<br><hr><br> <br><br><br><br><br><br><br>";
		echo"<a href='../controller/controller_curso.php?clave={$_SESSION['curso']}&accion=borrar'>
		<button class='btn btn-danger'>Eliminar este curso <span class='icon-bin'></span></button></a>";
		echo "<small>Borrará todo lo relacionado con este curso</small>";
		?>

		
	</div>


	<!--final de menu php-->		
</div>
</div>
</body>
</html>
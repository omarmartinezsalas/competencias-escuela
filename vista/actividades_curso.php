<?php
include "menu.php";
include "../controller/controller_recursos.php";


?>
	<div class="col-md-9 contenido">
		<h1>Actividades</h1>
		<?php 
		echo"{$_SESSION['curso']}/{$_SESSION['parcial']}<br>";
		actividades_cursos($_SESSION['curso']);
		echo "<br><hr><br>";
		echo"<a href='../controller/controller_curso.php?clave={$_SESSION['curso']}&accion=borrar'>
		<button class='btn btn-danger'  tooltip='eliminara todo alv'>Eliminar este curso <span class='icon-bin '></span></button></a>";
		echo "<small>Borrará todo lo relacionado con este curso</small>";
		?>

		
	</div>


	<!--final de menu php-->		
</div>
</div>
</body>
</html>
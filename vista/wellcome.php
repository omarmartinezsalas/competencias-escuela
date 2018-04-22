<?php
include "../controller/controller_recursos.php";
include "menu.php";

?>

	
		<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
			<div class="contenido" style="height: auto;">
				<h1>Bienvenido</h1>
				<a href="manual.html" align="right" target="_blank"><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Manual de ayuda"><span class="icon-question"></span></button></a>

				<?php     
				cursos($_SESSION['clave']);
				?>			
			</div>
		</div>
	</div>
</div>

</body>
</html>
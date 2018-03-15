<?php
include "menu.php";
?>

<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
		<h1>Atibutos de competencias diciplinares</h1>
		<form id="form-registro" name="competencias" method="POST" action="../controller/controller_atributo.php?accion=agregar">
			<label>Descripcion</label>
			<br><input class="form-control form-control-lg" type="text" placeholder="Descripcion de atributo" name="descripcion" size="150" maxlength="300" required > </input> <br>
			<label>Clave de competencia generica</label><br>
			<?php
			//include_once ("../controller/c_generica_id.php");
			?>

			<input class="form-control form-control-lg" type="text" placeholder="6 caracteres" name="clave" maxlength="6"  size="50" required> </input> <br>
					
			<br>
			<button id="submit" class="btn-primary" type="submit" form-id="form-registro">Registrar</button>
		</form>		

		<div class="container">
			<h1>Listar</h1>
			<?php
			include_once ("../controller/controller_atributo.php");
			?>
		</div>
	</div>



<!--final de menu php-->		
</div>


</div>
</body>
</html>
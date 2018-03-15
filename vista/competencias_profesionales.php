<?php
include "menu.php";
if(!isset($_SESSION['curso']))
{
	//header("location: wellcome.php",  true,  301);exit;
	echo"<br><center><a href='wellcome.php'><button type='button' class='btn btn-primary'>Selecciona un curso</button></a></center>";exit;
}
?>

	<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
		<h1>Competencias profesionales</h1>
		<form id="form-registro" name="competencias" method="POST" action="../controller/controller_profesional.php?accion=agregar" enctype="application/x-www-form-urlencoded" class="form-control">
			<label>Clave</label>
			<br><input class="form-control form-control-lg" type="text" placeholder="CG1" name="clave" maxlength="5" > </input> <br>
			<label>Descripción</label><br>
			<input class="form-control form-control-lg" type="text" placeholder="maximo 300 caracteres" name="descripcion" maxlength="300"   > </input> <br>
			<label>Categoria</label><br>


			<select class="form-control form-control-lg" name="categoria" id="categoria">
 			<option value="matematicas" selected>matematicas</option>
  			<option value="ciencias experimentales">ciencias experimentales</option>
  			<option value="ciencias sociales">ciencias sociales</option>
  			<option value="comunicacion">comunicacion</option>
  			
			</select><br>

			<label>Nivel</label><br>


			<select  class="form-control form-control-lg"  name="nivel" id="nivel">
 			<option value="basica" selected>basica</option>
  			<option value="extendida">extendida</option>
  			
  			
			</select><br>
			
			<button id="submit" class="btn-primary" type="submit" form-id="form-registro">Registrar</button>
		</form>
		 <div id="mensaje"></div>


		 <div class="container">
		 	<input  id="buscar" onkeyup="myFunction()" type="text" class="form-control" placeholder="Ingresa lo que deseas Buscar..."></input>
		 	<br>
			<h1>Listar</h1>
			<?php
			include ("../controller/controller_profesional.php");
			?>
		</div>
	</div>	



	<!--final de menu php-->
</div>
</div>
</body>
</html>
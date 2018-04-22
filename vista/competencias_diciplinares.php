<?php
include "menu.php";
if(!isset($_SESSION['curso']))
{
	//header("location: wellcome.php");exit;
	echo"<br><center><a href='wellcome.php'><button type='button' class='btn btn-primary'>Selecciona un curso</button></a></center>";exit;
}else
{
	include ("../controller/mostrar_competencias.php");
}
?>
	<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
		<h1>Competencias disciplinares</h1>
		<a href="manual.html#disciplinares" align="right" target="_blank"><button class="btn btn-warning"><span class="icon-question"></span></button></a>
		<!--<form id="form-registro" name="competencias" method="POST" action="../controller/controller_diciplinar.php?accion=agregar">
			<label>Clave</label>
			<br><input type="text" placeholder="CG1" name="clave" maxlength="5" class="form-control" required> </input> <br>
			<label>Descripción</label><br>
			<input type="text" placeholder="maximo 300 caracteres" name="descripcion" maxlength="300"  size="50" class="form-control" required> </input> <br>
			<label>Categoria...</label><br>

			<select name="categoria" id="categoria" class="form-control" >
 			<option value="matematicas" selected>matematicas</option>
  			<option value="ciencias experimentales">ciencias experimentales</option>
  			<option value="ciencias sociales">ciencias sociales</option>
  			<option value="comunicacion">comunicacion</option>
  			
			</select><br>


			<label>Nivel</label><br>

			<select name="nivel" id="nivel" class="form-control">
 			<option value="basica" selected>basica</option>
  			<option value="extendida">extendida</option>
  			
  			
			</select>
			
			
			<br>
			<button id="submit" class="btn-primary" type="submit" form-id="form-registro">Registrar</button>
		</form>	-->	

		<div class="container">
			<input  id="buscar" onkeyup="myFunction()" type="text" class="form-control" placeholder="Ingresa lo que deseas Buscar..."></input>
		
			<br>
			<?php
			if(isset($_SESSION['curso']))
			{
			//echo($_SESSION['curso']);
			}
			$mostrar=new lista();
			$mostrar->disciplinares($_SESSION['curso'],$_SESSION['parcial']); 
			?>
		</div>
	</div>
	<!--final de menu php-->		
</div>


</div>

</body>
</html>
<?php
include "menu.php";
if(!isset($_SESSION['curso']))
{
  //header("location: wellcome.php");
  echo"<br><center><a href='wellcome.php'><button type='button' class='btn btn-primary'>Selecciona un curso</button></a></center>";exit;
}
include "../controller/controller_recursos.php";
?>

<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
	<form name="registro_grupo" method="post" action="../controller/controller_actividad.php?accion=agregar">
		<h1>Registro Actividad</h1>
		<label>Descripcion</label><br>
		<input class="form-control form-control-lg" name="descripcion" type="text" maxlength="100" placeholder="" required></input><br>
		<label>Clave de curso</label><br>
		<input class="form-control form-control-lg" name="clave" type="number" maxlength="30" placeholder="" min="1" 
		max="100000" 
		value="<?php   echo $_SESSION['curso'];    ?>" 
		readonly required></input><br>
		
		<label>fecha de entrega</label><br>
		<input class="form-control form-control-lg" name="fecha" type="date" placeholder="" required></input><br>
		<div class="form-grup  form-control-lg">
		<label>parcial</label><br>
		 <input  type="radio" name="parcial" value="1" checked> 1<br>
  		<input type="radio" name="parcial" value="2"> 2<br>
  		<input type="radio" name="parcial" value="3"> 3<br>
		</div>
		<br>
<div id="items">
    <!-- agregar competencia generica -->
    <h5>+ Competencias genericas</h5>
		<button id="addgenerica" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">+</button>
    <button id="quitgenerica" type="button" class="btn btn-danger">-</button>
		<input id="generica" type="text" name="generica" placeholder="Competencia generica" readonly></input><br>

    <button id="addgenerica2" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">+</button>
    <button id="quitgenerica2" type="button" class="btn btn-danger">-</button>
    <input id="generica2" type="text" name="generica2" placeholder="Competencia generica" readonly></input><br>

    <button id="addgenerica3" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">+</button>
    <button id="quitgenerica3" type="button" class="btn btn-danger">-</button>
    <input id="generica3" type="text" name="generica3" placeholder="Competencia generica" readonly></input><br>
		<!-- agregar competencia dciplinar -->
    <h5>+ Competencias disciplinares</h5>
    <button id="adddiciplinar" type="button" class="btn btn-success"  data-toggle="modal" data-target="#modaldiciplinar">+</button>
    <button id="quitdiciplinar" type="button" class="btn btn-danger">-</button>
    <input id="diciplinar" type="text" name="diciplinar" placeholder="Competencia diciplinar" readonly></input><br>

    <button id="adddiciplinar2" type="button" class="btn btn-success"  data-toggle="modal" data-target="#modaldiciplinar">+</button>
    <button id="quitdiciplinar2" type="button" class="btn btn-danger">-</button>
    <input id="diciplinar2" type="text" name="diciplinar2" placeholder="Competencia diciplinar" readonly></input><br>
    <!-- agregar competencia pro-->
    <h5>+ Competencias profesionales</h5>
    <button id="addprofesional" type="button" class="btn btn-success" data-toggle="modal" data-target="#modalprofesional">+</button>
    <button id="quitprofesional" type="button" class="btn btn-danger">-</button>
    <input id="profesional" type="text" name="profesional" placeholder="Competencia profesional" readonly></input><br>

    <button id="addprofesional2" type="button" class="btn btn-success" data-toggle="modal" data-target="#modalprofesional">+</button>
    <button id="quitprofesional2" type="button" class="btn btn-danger">-</button>
    <input id="profesional2" type="text" name="profesional2" placeholder="Competencia profesional" readonly></input><br>
</div>
<!-- boton envia formulario -->
    <br><center><button type="submit" class="btn btn-primary">Registrar</button></center>



	</form>

  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Competencias genericas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="modal-body">
        	     <form id="form_com" method="post" action="../controller/controller_add_generica_act.php">
            		<!--<select name="categoria">
            			<option value="se autodetermina y cuida de si">Se autodetermina y cuida de si</option>
            			<option value="participa con responsabilidad en la sociedad">Participa con responsabilidad en la sociedad</option>
            			<option value="se expresa y comunica">Se expresa y comunica</option>
                  <option value="piensa critica y reflexivamente">Piensa critica y reflexivamente</option>
                  <option value="aprende de forma autonoma">Aprende de forma autonoma</option>
                  <option value="trabaja de forma colaborativa">Trabaja de forma colaborativa</option>
            		</select>-->
            	
        		    <input type="submit" name="add_com_act" class="btn btn-primary" id="add_com" value="Buscar"></input>
        	     </form>
              <div id="mensajeg"></div>
            </div>
            <div class="modal-footer">
            </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="modaldiciplinar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Competencias diciplinares</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="modal-body">
               <form id="form_diciplinar" method="post" action="../controller/controller_add_generica_act.php">
               
                <select name="categoriad">
                  <option value="ciencias experimentales">Ciencias experimentales</option>
                  <option value="comunicacion">Comunicacion</option>
                  <option value="ciencias sociales">Ciencias sociales</option>
                  <option value="matematicas">Matematicas</option>
                </select>
                <select name="niveld">
                  <option value="basica">Basica</option>
                  <option value="extendida">Extendida</option>    
                </select>
                <input type="submit" name="add_com_act" class="btn btn-primary" id="add_diciplinar"></input>
               </form>
              <div id="mensajed"></div>
            </div>
            <div class="modal-footer">
            </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalprofesional" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Competencias profesionales</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="modal-body">
               <form id="form_profesional" method="post" action="../controller/controller_add_generica_act.php">
                <select name="categoria">
                  <option value="ciencias experimentales">Ciencias experimentales</option>
                  <option value="comunicacion">Comunicacion</option>
                  <option value="ciencias sociales">Ciencias sociales</option>
                  <option value="matematicas">Matematicas</option>
                </select>
                <select name="nivel">
                  <option value="basica">Basica</option>
                  <option value="extendida">Extendida</option>    
                </select>
                <input type="submit" name="add_com_act" class="btn btn-primary" id="add_profesional"></input>
               </form>
              <div id="mensajep"></div>
            </div>
            <div class="modal-footer">
            </div>
      </div>
    </div>
  </div>



</div>
<!--final de menu php-->		
</div>
</div>

<script type="text/javascript" src="../resource/js/form_actividad.js"></script>
</body>
</html>
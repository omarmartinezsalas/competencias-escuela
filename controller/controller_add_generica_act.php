<?php
include"../model/competencia_generica.php";
include"../model/competencia_diciplinar.php";
include"../model/competencia_profesional.php";


$clase=$_GET['clase'];


switch($clase)
{
  case "generica_antigua":
    $clase_generica=new competencia_generica();
      
      //$consulta=$clase_generica->ver_competencias();
      $consulta=$clase_generica->ver_competencias_seleccionada_curso(31);
      $i=0;
      $array = array();
      
      while ($roow = mysqli_fetch_row($consulta))
      {
        
          $atributo=$clase_generica->ver_atributos($roow[0]);
          echo"<table class='table table-striped' border='3'><tr style='background-color:#009999;'><th>{$roow[1]}</th><th>{$roow[2]}</th></tr>";
          while ($r=mysqli_fetch_row($atributo)) 
          {
            echo"
            <tr><td>{$r[0]}-{$r[1]}</td>
              <td>
                <button id='clave={$r[0]}' class='btn btn-success'><span class='icon-folder-plus'></span></button>
              </td>
            </tr>
            ";
          }
          echo"</table>";
        $array[$i]=['clave'=>$roow[0],'des'=>$roow[1],'cat'=>$roow[2]]; 
        $i=$i+1;
      }
  break;
  case "generica":
    $clave_curso=$_POST['clave_curso'];
    $clase_generica=new competencia_generica();
      
     
      $consulta=$clase_generica->ver_atributo_seleccionada_curso($clave_curso);
      $i=0;
      $array = array();
      //respuesta-> clave de competencia, descrpcion atributo, categoria de competencia, id de atributo
      if($consulta==null)
      {
        echo "No ha seleccionado compatencias para este curso";
      }else
      {
          while ($roow = mysqli_fetch_row($consulta))
          {
            
              $atributo=$clase_generica->verporid($roow[0]);
              //respuesta descripcion de competencia, categoria de competencia generica
              echo"<table class='table table-striped' border='3'><tr style='background-color:#009999;'><th>competencia</th><th>categoria</th><th>atributo</th></tr>";

              while ($r=mysqli_fetch_row($atributo)) 
              {
                echo"
                <tr>
                  <td>{$roow[0]}-{$r[0]}</td>
                  <td>{$r[1]}</td>

                  <td>
                    {$roow[3]}-{$roow[1]}
                    <button id='clave={$roow[3]}' value='{$roow[1]}' class='btn btn-success'><span class='icon-folder-plus'></span></button>
                    
                  </td>
                </tr>
                ";
              }
              echo"</table>";
            $array[$i]=['clave'=>$roow[0],'des'=>$roow[1],'cat'=>$roow[2]]; 
            $i=$i+1;
          }
      }
      
  break;
  case "diciplinar_antigua";
      $categoria=$_POST['categoriad'];
      $nivel=$_POST['niveld'];
      echo "{$categoria}+{$nivel}";


      $clase_diciplinar=new competencia_diciplinar();
      $consulta=$clase_diciplinar->filtro($categoria,$nivel);
      if ($consulta!=null) 
      {
        echo"<h6 style='color:#2E9AFE;'>Competencias diciplinares</h6>";
        echo"<table border='0' class='table table-hover' id='tabla'>
        <thead>
        <tr style='background-color:#2E9AFE;'>
        <th>Descripcion</th>
        <th>Categoria</th>
        </tr>
        </thead>
        <tbody>";
        while ($row = mysqli_fetch_row($consulta)) 
        {
              echo"<tr><td>{$row[0]}.-{$row[1]}</td><td>{$row[2]}-{$row[3]}
              <button id='{$row[0]}' class='btn btn-success'><span class='icon-checkmark'></span></button>
              </td></tr>";
          } 
          echo"</tbody></table>";

      }else{echo "No hay resultados";}

  break;
  case "diciplinar";
      $clave_curso=$_POST['clave_curso'];
     


      $clase_diciplinar=new competencia_diciplinar();
      //$consulta=$clase_diciplinar->filtro($categoria,$nivel);
      $consulta=$clase_diciplinar->ver_competencias_seleccionadas_curso($clave_curso);

      //respuesta-> descripcion, categoria, nivel, clave de competencia
      if ($consulta!=null) 
      {
        echo"<h6 style='color:#2E9AFE;'>Competencias diciplinares</h6>";
        echo"<table border='0' class='table table-hover' id='tabla'>
        <thead>
        <tr style='background-color:#2E9AFE;'>
        <th>Descripcion</th>
        <th>Categoria</th>
        </tr>
        </thead>
        <tbody>";
        while ($row = mysqli_fetch_row($consulta)) 
        {
              echo"<tr>
              <td>
              {$row[3]}.-{$row[0]}</td>
              <td>{$row[1]}-{$row[2]}
              <button id='{$row[3]}' value='{$row[0]}' class='btn btn-success'><span class='icon-checkmark'></span></button>
              </td></tr>";
          } 
          echo"</tbody></table>";

      }else{echo "No ha seleccionado competencias disciplinares para este curso";}

  break;
  case "profesional_antigua":
      $categoria=$_POST['categoria'];
      $nivel=$_POST['nivel'];
      echo "{$categoria}+{$nivel}";
      $clase_profesional=new competencia_profesional();
      $consulta=$clase_profesional->filtro($categoria,$nivel);
      if ($consulta!=null) 
      {
        echo"<h6 style='color:#2E9AFE;'>Competencias profesionales</h6>";
        echo"<table border='0' class='table table-hover' id='tabla'>
        <thead>
        <tr style='background-color:#2E9AFE;'>
        <th>Descripcion</th>
        <th>Categoria</th>
        </tr>
        </thead>
        <tbody>";
        while ($row = mysqli_fetch_row($consulta)) 
        {
              echo"<tr><td>{$row[0]}.-{$row[1]}</td><td>{$row[2]}-{$row[3]}
              <button id='{$row[0]}' class='btn btn-success'><span class='icon-checkmark'></span></button>
              </td></tr>";
          } 
          echo"</tbody></table>";

      }else{echo "<br>No hay resultados";}
  break;
  case "profesional":
      $clave_curso=$_POST['clave_curso'];
     
      $clase_profesional=new competencia_profesional();
      //$consulta=$clase_profesional->filtro($categoria,$nivel);
      $consulta=$clase_profesional->ver_competencias_seleccionadas_curso($clave_curso);
      //respuesta= descripcion com, categoria com, nivel comp, clave competencia
      if ($consulta!=null) 
      {
        echo"<h6 style='color:#2E9AFE;'>Competencias profesionales</h6>";
        echo"<table border='0' class='table table-hover' id='tabla'>
        <thead>
        <tr style='background-color:#2E9AFE;'>
        <th>Descripcion</th>
        <th>Categoria</th>
        </tr>
        </thead>
        <tbody>";
        while ($row = mysqli_fetch_row($consulta)) 
        {
              echo"<tr>
              <td>{$row[3]}.-{$row[0]}</td>
              <td>{$row[1]}-{$row[2]}
              <button id='{$row[3]}' value='{$row[0]}' class='btn btn-success'><span class='icon-checkmark'></span></button>
              </td></tr>";
          } 
          echo"</tbody></table>";

      }else{echo "<br>No hay resultados";}
  break;
}



?>
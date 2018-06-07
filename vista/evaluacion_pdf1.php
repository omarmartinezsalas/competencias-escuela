<?php
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
if (!isset($_SESSION['clave'])) {
  header('Location: ../index.html');
    //echo"it works";
} else {
  //echo'session activada';
    //include "../controller/controller_recursos2.php";
    require('../resource/pdf/fpdf.php');
require('../controller/controller_pdf.php');
}



class PDF extends FPDF
{
    function Header()
    {
        // Logo
        $this->Image('../resource/imageni/gobierno.jpg',10,10,60);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(50);
        // Título
        $this->Image('../resource/imageni/ceytem.gif',150,10,30);
        // Salto de línea
        $this->Ln(35);
    }
    function datos(Array $d)
    {
        $clave=$d[0];
        $this->SetFont('Arial','B',10);
        $this->cell(90,8,"Clave del profesor: {$d[0]}",1);
        $this->Multicell(90,8,"Nombre: {$d[1]}",1);
        $this->cell(90,8,"Clave de asignatura: {$d[2]}",1);
        $this->Multicell(90,8,"Asignatura: {$d[3]}",1);
        
        $this->cell(90,8,"Grupo: {$d[4]}",1); 
        $this->Multicell(90,8,"Parcial: {$d[5]}",1);
       
        $this->cell(180,8,"Competencias {$d[6]}",1,0,'C');
        $this->Ln(10);
    }
    function encabezados(Array $d)
    {
        $clave=$d[0];
        $this->SetFont('Arial','B',10);

        $columnas=count($d);

            $this->Cell(30,7,$d[0],1);
            $this->Cell(50,7,$d[1],1);
           
        for ($i=2; $i <=$columnas-1 ; $i++) 
        { 
            
            if ($i==$columnas-1) 
                {
                    $this->Cell(20,7,$d[$i],1);
                 }else
                 {
                    $this->Cell(13,7,$d[$i],1);  
                 }
        }
        // foreach($d as $col)
        // {
        //     $this->Cell(20,7,$col,1);
        //     //$this->Ln();
        // }
        

       
        //$this->cell(180,8,"Competencias {$d[6]}",1,0,'C');
        $this->Ln();
    }
    function tabla(Array $d,$columnas)
    {
        $clave=$d[0];
        $this->SetFont('Arial','B',8);
        $contar=count($d);
        foreach ($d as $fila) 
        {

            $this->Cell(30,7,$fila[0],1);
            $this->Cell(50,7,$fila[1],1);
            for ($i=2; $i <=$columnas-1 ; $i++) 
            {
                if ($i==$columnas-1) 
                {
                    $this->Cell(20,7,$fila[$i],1);
                 }else
                 {
                    $this->Cell(13,7,$fila[$i],1);  
                 } 
                    
            }
            $this->ln();

        }
        //$this->cell(180,8,"Competencias {$d[6]}",1,0,'C');
        $this->Ln(20);
    }
    function tabla_competencias(Array $d)
    {
        $clave=$d[0];
        $this->SetFont('Arial','B',8);
        $contar=count($d);
        foreach ($d as $fila) 
        {
            $this->Cell(20,7,$fila[0],1);
            //$this->Cell(90,7,$fila[1],1);   
            $this->MultiCell(160,7,$fila[1],1);               
        }
        //$this->cell(180,8,"Competencias {$d[6]}",1,0,'C');
        $this->Ln(20);
    }
    function tabla_competencias_d(Array $d)
    {
        $clave=$d[0];
        $this->SetFont('Arial','B',8);
        $contar=count($d);
        foreach ($d as $fila) 
        {
            $this->Cell(20,7,$fila[0],1);
            $this->Cell(50,7,$fila[2],1);   
            $this->MultiCell(110,7,$fila[1],1);               
        }
        //$this->cell(180,8,"Competencias {$d[6]}",1,0,'C');
        $this->Ln(20);
    }

}

$pdf = new PDF();

if ($_GET['competencias']=="genericas") 
{
$estring=$_SESSION['clave'];
$array=obtener_datos($_SESSION['curso'],$_SESSION['parcial'],$estring,"Genericas");
$encabezados=encabezado($_SESSION['curso'],$_SESSION['parcial'],$estring);
$contenido_tabla= contenido_tabla($_SESSION['curso'],$_SESSION['parcial'],$estring);
$competencias=listar_competencias_genericas($_SESSION['curso'],$_SESSION['parcial']);

$columnas=count($encabezados);
//$array=['12345678','omar martinez salas martinez','iowroeriower','programacion orientada a objetos','409','2','Profesionales'];
$pdf->SetFont('Arial','',14);

$pdf->AddPage();

$pdf->datos($array);
$pdf->encabezados($encabezados);
$pdf->tabla($contenido_tabla,$columnas);
$pdf->tabla_competencias($competencias);

//$pdf->BasicTable($header,$data);
$pdf->AddPage('L','Letter');
$pdf->datos($array);
$pdf->encabezados($encabezados);
$pdf->tabla($contenido_tabla,$columnas);
$pdf->tabla_competencias($competencias);    
}elseif ($_GET['competencias']=="disciplinares") 
{
    $estring=$_SESSION['clave'];
    $array=obtener_datos($_SESSION['curso'],$_SESSION['parcial'],$estring,"Disciplinares");
    $encabezados=encabezado2($_SESSION['curso'],$_SESSION['parcial'],$estring);
    $contenido_tabla= contenido_tabla2($_SESSION['curso'],$_SESSION['parcial'],$estring);
    $competencias=listar_competencias_diciplinares($_SESSION['curso'],$_SESSION['parcial']);

    $columnas=count($encabezados);
    //$array=['12345678','omar martinez salas martinez','iowroeriower','programacion orientada a objetos','409','2','Profesionales'];
    $pdf->SetFont('Arial','',14);

    $pdf->AddPage();

    $pdf->datos($array);
    $pdf->encabezados($encabezados);
    $pdf->tabla($contenido_tabla,$columnas);
    $pdf->tabla_competencias_d($competencias);

    //$pdf->BasicTable($header,$data);
    $pdf->AddPage('L','Letter');
    $pdf->datos($array);
    $pdf->encabezados($encabezados);
    $pdf->tabla($contenido_tabla,$columnas);
    $pdf->tabla_competencias_d($competencias);
}elseif ($_GET['competencias']=="profesionales") 
{
    $estring=$_SESSION['clave'];
    $array=obtener_datos($_SESSION['curso'],$_SESSION['parcial'],$estring,"Profesionales");
    $encabezados=encabezado3($_SESSION['curso'],$_SESSION['parcial'],$estring);
    $contenido_tabla= contenido_tabla3($_SESSION['curso'],$_SESSION['parcial'],$estring);
    $competencias=listar_competencias_profesionales($_SESSION['curso'],$_SESSION['parcial']);

    $columnas=count($encabezados);
    //$array=['12345678','omar martinez salas martinez','iowroeriower','programacion orientada a objetos','409','2','Profesionales'];
    $pdf->SetFont('Arial','',14);

    $pdf->AddPage();

    $pdf->datos($array);
    $pdf->encabezados($encabezados);
    $pdf->tabla($contenido_tabla,$columnas);
    $pdf->tabla_competencias($competencias);

    //$pdf->BasicTable($header,$data);
    $pdf->AddPage('L','Letter');
    $pdf->datos($array);
    $pdf->encabezados($encabezados);
    $pdf->tabla($contenido_tabla,$columnas);
    $pdf->tabla_competencias($competencias);
}

//$pdf->ImprovedTable($header,$data);

$pdf->Output();
?>
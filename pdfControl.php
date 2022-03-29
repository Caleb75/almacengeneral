<?php 

require 'fpdf/fpdf.php';

class PDF extends FPDF{
	//Encabezado de página
	function Header()
	{
		
		//Arial Bold 15
		$this->SetFont('Arial','B',15);
		//Movernos a la derecha
		$this->Cell(70);
		//Titulo
		
		//Salto de linea
			
		
	}
	function BasicTable($header, $data)
{
    // Cabecera
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Datos
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}
	//Pie de página
	function Footer()
	{
		//Posicion: a 1.5cm del final
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',6);
		//Número de página
		$this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
	}
}
$id=$_REQUEST['id'];
include("conexion.php");
$query = "SELECT * FROM control_inv WHERE id = '$id'";
$resultado = $cn->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->SetFillColor(204, 204, 204);
$pdf->Image("images/utem.png",9,10,50);
$pdf->SetXY(70,20);
$pdf->Cell(100, 0, utf8_decode('Logistica, Área cadena de suministros'), 0, 1, '');
$pdf->SetFont('Arial','',15);
$pdf->SetXY(110,28);
$pdf->Cell(100, 0, utf8_decode('Control de inventario'), 0, 1, '');
while($row = $resultado->fetch_assoc()){
    $pdf->SetFont('Arial','',11);
    $pdf->SetXY(16,60);
	$pdf->Cell(60,10, utf8_decode('Fecha de emision'),1,0,'C',True);
    $pdf->Cell(60,10, utf8_decode('Numero de Revision  '),1,0,'C',True);
    $pdf->Cell(60,10, utf8_decode('Fecha de Actulizacion '),1,0,'C',True);
	$pdf->SetXY(16,70);
	$pdf->Cell(60,10, utf8_decode($row['fecha']),1,0,'C',0);
    $pdf->Cell(60,10, utf8_decode($row['numeroR']),1,0,'C',0);
    $pdf->Cell(60,10, utf8_decode($row['fechaAct']),1,0,'C',0);
    $pdf->Ln(20);
    $pdf->SetX(16);
	$pdf->Cell(30,10, utf8_decode('Codigo'),1,0,'C',True);
    $pdf->Cell(30,10, utf8_decode('Descripcion'),1,0,'C',True);
    $pdf->Cell(30,10, utf8_decode('Existencias'),1,0,'C',True);
    $pdf->Cell(30,10, utf8_decode('Entradas'),1,0,'C',True);
    $pdf->Cell(30,10, utf8_decode('Salidas'),1,0,'C',True);
    $pdf->Cell(30,10, utf8_decode('Stock'),1,0,'C',True);
	$pdf->SetXY(16,100);
	$pdf->Cell(30,10, utf8_decode($row['codigo']),1,0,'C',0);
    $pdf->Cell(30,10, utf8_decode($row['descripcion']),1,0,'C',0);
    $pdf->Cell(30,10, utf8_decode($row['existencias']),1,0,'C',0);
    $pdf->Cell(30,10, utf8_decode($row['entrada']),1,0,'C',0);
    $pdf->Cell(30,10, utf8_decode($row['salida']),1,0,'C',0);
    $pdf->Cell(30,10, utf8_decode($row['stock']),1,0,'C',0);
 
    $pdf->SetXY(116,250);
	$pdf->Cell(60,10, utf8_decode('Elaboro;'),0,1,'C',);
	
}



$pdf->Output(); 

?>
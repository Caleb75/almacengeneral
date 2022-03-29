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
$query = "SELECT * FROM solicitud_ins WHERE id = '$id'";
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
$pdf->Cell(100, 0, utf8_decode('Solicitud de Inspeccion'), 0, 1, '');
while($row = $resultado->fetch_assoc()){
    $pdf->SetFont('Arial','',11);
	$pdf->SetXY(10,60);
	$pdf->Cell(60,10, utf8_decode('Numero de Contenedor'),1,0,'C',True);
    $pdf->Cell(60,10, utf8_decode('Fecha de inspeccion  '),1,0,'C',True);
    $pdf->Cell(60,10, utf8_decode('Lugar de inspeccion '),1,0,'C',True);
	$pdf->SetXY(10,70);
	$pdf->Cell(60,10, utf8_decode($row['numero_Cont']),1,0,'C',0);
    $pdf->Cell(60,10, utf8_decode($row['fecha_Hora']),1,0,'C',0);
    $pdf->Cell(60,10, utf8_decode($row['lugar_Ins']),1,0,'C',0);
    $pdf->Ln(15);
    $pdf->Cell(80,10, utf8_decode('Via'),1,0,'C',True);
    $pdf->Cell(100,10, utf8_decode($row['via']),1,0,'C',0);
    $pdf->Ln(15);
    $pdf->Cell(80,10, utf8_decode('Nombre del solicitante de inspeccion'),1,0,'C',True);
    $pdf->Cell(100,10, utf8_decode($row['nombre_Solicicitante']),1,0,'C',0);
    $pdf->Ln(15);
    $pdf->Cell(80,10, utf8_decode('Tipo de Operacion'),1,0,'C',True);
    $pdf->Cell(100,10, utf8_decode($row['tipo_de_Op']),1,0,'C',0);
	$pdf->Ln(15);
    $pdf->Cell(80,10, utf8_decode('Nombre del Servicio'),1,0,'C',True);
    $pdf->Cell(100,10, utf8_decode($row['nombre_Ser']),1,0,'C',0);
    $pdf->Ln(15);
    $pdf->Cell(80,10, utf8_decode('Metodo de Trasporte'),1,0,'C',True);
    $pdf->Cell(100,10, utf8_decode($row['metodo_Trans']),1,0,'C',0);
    $pdf->Ln(15);
    $pdf->Cell(80,10, utf8_decode('Trasportista o Gondola de Ferrocarril'),1,0,'C',True);
    $pdf->Cell(100,10, utf8_decode($row['traspor_Gondo']),1,0,'C',0);
    $pdf->Ln(15);
    $pdf->Cell(45,10, utf8_decode('Empaque/Presentacion'),1,0,'C',True);
    $pdf->Cell(45,10, utf8_decode('Marca'),1,0,'C',True);
    $pdf->Cell(45,10, utf8_decode('Tonelaje'),1,0,'C',True);
    $pdf->Cell(45,10, utf8_decode('Bultos'),1,0,'C',True);
    $pdf->SetXY(10,185);
	$pdf->Cell(45,10, utf8_decode($row['empaque']),1,0,'C',0);
    $pdf->Cell(45,10, utf8_decode($row['marca']),1,0,'C',0);
    $pdf->Cell(45,10, utf8_decode($row['tone']),1,0,'C',0);
    $pdf->Cell(45,10, utf8_decode($row['bulto']),1,0,'C',0);
}



$pdf->Output(); 

?>
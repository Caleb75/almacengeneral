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
$query = "SELECT * FROM entrada_alm WHERE id = '$id'";
$resultado = $cn->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Image("images/utem.png",9,10,50);
$pdf->SetXY(70,20);
$pdf->Cell(100, 0, utf8_decode('Logistica, Área cadena de suministros'), 0, 1, '');
$pdf->SetFont('Arial','',15);
$pdf->SetXY(110,28);
$pdf->Cell(100, 0, utf8_decode('Entrada almacen'), 0, 1, '');
$pdf->SetXY(115, 32);
$pdf->Cell(24,6, utf8_decode('Universidad Tecnologica de Manzanillo '),0,1,'C');
while($row = $resultado->fetch_assoc()){
	$pdf->SetFont('Arial','',11);
	$pdf->SetFillColor(204, 204, 204);
	$pdf->SetXY(16, 60);
	$pdf->Cell(24,6, utf8_decode('Folio '),1,1,'C',True);
	$pdf->SetXY(16, 66);
	$pdf->Cell(24,6, utf8_decode($row['folioalm']),1,1,'C');
	$pdf->SetXY(40, 60);
	$pdf->Cell(50,6, utf8_decode('Encargado de practica '),1,1,'C',True);
	$pdf->SetXY(40, 66);
	$pdf->Cell(50,6, utf8_decode($row['encargado_us']),1,1,'C');
	$pdf->SetXY(90, 60);
	$pdf->Cell(60,6, utf8_decode('Fecha de registro '),1,1,'C',True);
	$pdf->SetXY(90, 66);
	$pdf->Cell(60,6, utf8_decode($row['fecharegistro']),1,1,'C');
	$pdf->SetXY(150, 60);
	$pdf->Cell(50,6, utf8_decode('N° de contenedor: '),1,1,'C',True);
	$pdf->SetXY(150, 66);
	$pdf->Cell(50,6, utf8_decode($row['n_contenedor']),1,1,'C');
	$pdf->SetXY(16,72);
	$pdf->Cell(24,6, utf8_decode('Medida '),1,1,'C',True);
	$pdf->SetXY(16, 78);
	$pdf->Cell(24,6, utf8_decode($row['medida']),1,1,'C');
	$pdf->SetXY(40,72);
	$pdf->Cell(50,6, utf8_decode('N° de booking '),1,1,'C',True);
	$pdf->SetXY(40, 78);
	$pdf->Cell(50,6, utf8_decode($row['n_booking']),1,1,'C');
	$pdf->SetXY(90,72);
	$pdf->Cell(50,6, utf8_decode('N° de bultos '),1,1,'C',True);
	$pdf->SetXY(90, 78);
	$pdf->Cell(50,6, utf8_decode($row['n_bultos']),1,1,'C');
	$pdf->SetXY(140,72);
	$pdf->Cell(60,6, utf8_decode('Fecha de llegada'),1,1,'C',True);
	$pdf->SetXY(140, 78);
	$pdf->Cell(60,6, utf8_decode($row['fh_llegada']),1,1,'C');
	$pdf->SetXY(16,84);
	$pdf->Cell(80,6, utf8_decode(' Referencia / Lote '),1,1,'C',True);
	$pdf->SetXY(16, 90);
	$pdf->Cell(80,30, utf8_decode($row['refe_lote']),1,1,'C');
	$pdf->SetXY(96,84);
	$pdf->Cell(104,6, utf8_decode(' Descripción de la mercancia '),1,1,'C',True);
	$pdf->SetXY(96, 90);
	$pdf->Cell(104,30, utf8_decode($row['desc_merca']),1,1,'C');
	$pdf->SetXY(16,120);
	$pdf->Cell(50,6, utf8_decode(' Clientes '),1,1,'C',True);
	$pdf->SetXY(16, 126);
	$pdf->Cell(50,6, utf8_decode($row['clientes']),1,1,'C');
	$pdf->SetXY(66,120);
	$pdf->Cell(64,6, utf8_decode('Sello fiscal '),1,1,'C',True);
	$pdf->SetXY(66, 126);
	$pdf->Cell(64,6, utf8_decode($row['s_fiscal']),1,1,'C');
	$pdf->SetXY(130,120);
	$pdf->Cell(70,6, utf8_decode('Sello adicional '),1,1,'C',True);
	$pdf->SetXY(130, 126);
	$pdf->Cell(70,6, utf8_decode($row['s_adicional']),1,1,'C');
	$pdf->SetXY(16,132);
	$pdf->Cell(65,6, utf8_decode('Numero de factura '),1,1,'C',True);
	$pdf->SetXY(16, 138);
	$pdf->Cell(65,6, utf8_decode($row['n_factura']),1,1,'C');
	$pdf->SetXY(81,132);
	$pdf->Cell(64,6, utf8_decode('Peso neto '),1,1,'C',True);
	$pdf->SetXY(81, 138); 
	$pdf->Cell(64,6, utf8_decode($row['p_neto']),1,1,'C');
	$pdf->SetXY(145,132);
	$pdf->Cell(55,6, utf8_decode('Peso bruto'),1,1,'C',True);
	$pdf->SetXY(145, 138); 
	$pdf->Cell(55,6, utf8_decode($row['p_bruto']),1,1,'C');
	$pdf->SetXY(16,190);
	$pdf->Cell(60,10, utf8_decode('Elaboro: Supervisor de almacen'),0,1,'C');
	$pdf->SetXY(138,190);
	$pdf->Cell(60,10, utf8_decode('Reviso: Jefe de almacen'),0,1,'C',);
	
}



$pdf->Output(); 

?>
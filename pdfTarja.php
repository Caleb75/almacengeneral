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
$query = "SELECT * FROM tarja_exp WHERE id = '$id'";
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
$pdf->Cell(100, 0, utf8_decode('Entrada almacen'), 0, 1, '');
$pdf->SetXY(115, 32);
$pdf->Cell(24,6, utf8_decode('Universidad Tecnologica de Manzanillo '),0,1,'C');
while($row = $resultado->fetch_assoc()){
	$pdf->SetFont('Arial','',11);

	$pdf->SetXY(14, 60);
	$pdf->Cell(92,6, utf8_decode('Datos del cliente '),1,1,'C',True);
    $pdf->SetXY(14, 66);
    $pdf->Cell(50,6, utf8_decode('Agente Aduanal :'),1,1,'C',True);
    $pdf->SetXY(64, 66);
    $pdf->Cell(42,6, utf8_decode($row['agente_A']),1,1,'C');
    $pdf->SetXY(14, 72);
    $pdf->Cell(50,6, utf8_decode('Cliente :'),1,1,'C',True);
    $pdf->SetXY(64, 72);
    $pdf->Cell(42,6, utf8_decode($row['cliente']),1,1,'C');
    $pdf->SetXY(14, 78);
    $pdf->Cell(50,6, utf8_decode('Buque o Viaje :'),1,1,'C',True);
    $pdf->SetXY(64, 78);
    $pdf->Cell(42,6, utf8_decode($row['buque']),1,1,'C');
    $pdf->SetXY(14, 84);
    $pdf->Cell(50,6, utf8_decode('Numero de contenedor :'),1,1,'C',True);
    $pdf->SetXY(64, 84);
    $pdf->Cell(42,6, utf8_decode($row['num_Cont']),1,1,'C');
    $pdf->SetXY(14, 90);
    $pdf->Cell(50,6, utf8_decode('Medida del contenedor :'),1,1,'C',True);
    $pdf->SetXY(64, 90);
    $pdf->Cell(42,6, utf8_decode($row['medida_Cont']),1,1,'C');
    $pdf->SetXY(106, 66);
    $pdf->Cell(50,6, utf8_decode('Tipo de mercancia :'),1,1,'C',True);
    $pdf->SetXY(156, 66);
    $pdf->Cell(40,6, utf8_decode($row['t_mercancia']),1,1,'C');
    $pdf->SetXY(106, 72);
    $pdf->Cell(50,6, utf8_decode('Numero de bultos :'),1,1,'C',True);
    $pdf->SetXY(156, 72);
    $pdf->Cell(40,6, utf8_decode($row['bultos']),1,1,'C');
    $pdf->SetXY(106, 78);
    $pdf->Cell(50,6, utf8_decode('Peso neto:'),1,1,'C',True);
    $pdf->SetXY(156, 78);
    $pdf->Cell(40,6, utf8_decode($row['p_neto']),1,1,'C');
    $pdf->SetXY(106, 84);
    $pdf->Cell(50,6, utf8_decode('Peso bruto:'),1,1,'C',True);
    $pdf->SetXY(156, 84);
    $pdf->Cell(40,6, utf8_decode($row['p_bruto']),1,1,'C');
    $pdf->SetXY(106, 90);
    $pdf->Cell(50,6, utf8_decode('Lote o Referencia:'),1,1,'C',True);
    $pdf->SetXY(156, 90);
    $pdf->Cell(40,6, utf8_decode($row['lote']),1,1,'C');
    $pdf->SetXY(106, 96);
	$pdf->Cell(90,6, utf8_decode('Observaciones '),1,1,'C',True);
    $pdf->SetXY(106,102);
    $pdf->Cell(90,42, utf8_decode($row['obser']),1,1,'C');
	$pdf->SetXY(106, 60);
	$pdf->Cell(90,6, utf8_decode('Datos de la mercancia '),1,1,'C',True);
    $pdf->SetXY(14  , 96);
	$pdf->Cell(92,6, utf8_decode('Datos del transporte'),1,1,'C',True);
    $pdf->SetXY(14, 102);
    $pdf->Cell(50,6, utf8_decode('Linea transportista:'),1,1,'C',True);
    $pdf->SetXY(64, 102);
    $pdf->Cell(42,6, utf8_decode($row['lineaTras']),1,1,'C');
    $pdf->SetXY(14, 108);
    $pdf->Cell(50,6, utf8_decode('Nombre del conductor:'),1,1,'C',True);
    $pdf->SetXY(64, 108);
    $pdf->Cell(42,6, utf8_decode($row['nombreCon']),1,1,'C');
    $pdf->SetXY(14, 114);
    $pdf->Cell(50,6, utf8_decode('Placas del camion:'),1,1,'C',True);
    $pdf->SetXY(64, 114);
    $pdf->Cell(42,6, utf8_decode($row['placasCa']),1,1,'C');
    $pdf->SetXY(14, 120);
    $pdf->Cell(50,6, utf8_decode('Placas de la plataforma:'),1,1,'C',True);
    $pdf->SetXY(64, 120);
    $pdf->Cell(42,6, utf8_decode($row['pla_plataformas']),1,1,'C');
    $pdf->SetXY(14, 126);
    $pdf->Cell(50,6, utf8_decode('Numero economico:'),1,1,'C',True);
    $pdf->SetXY(64, 126);
    $pdf->Cell(42,6, utf8_decode($row['n_economico']),1,1,'C');
    $pdf->SetXY(14, 132);
    $pdf->Cell(50,6, utf8_decode('Destino:'),1,1,'C',True);
    $pdf->SetXY(64, 132);
    $pdf->Cell(42,6, utf8_decode($row['destino']),1,1,'C');
    $pdf->SetXY(14, 138);
    $pdf->Cell(50,6, utf8_decode('Sello fiscal:'),1,1,'C',True);
    $pdf->SetXY(64, 138);
    $pdf->Cell(42,6, utf8_decode($row['s_fiscal']),1,1,'C');

    $pdf->SetXY(16,190);
	$pdf->Cell(60,10, utf8_decode('Elaboro: Supervisor de almacen'),0,1,'C',);
	$pdf->SetXY(138,190);
	$pdf->Cell(60,10, utf8_decode('Reviso: Jefe de almacen'),0,1,'C',);
   

}



$pdf->Output(); 

?>
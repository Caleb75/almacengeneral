<?php 

	include ("conexion.php");


	$numero_Cont = $_POST['numero_Cont'];
    $fecha_Hora = $_POST['Fecha_Hora'];
	$lugar_Ins = $_POST['lugar_Ins'];
    $via = $_POST['via'];
	$nombre_Solicicitante = $_POST['nombre_Solicicitante'];
	$tipo_de_Op = $_POST['Tipo_de_Op'];
	$nombre_Ser = $_POST['Nombre_Ser'];
	$metodo_Trans = $_POST['metodo_Trans'];
	$traspor_Gondo = $_POST['Traspor_Gondo'];
    $empaque = $_POST['empaque'];
	$marca = $_POST['marca'];
	$tone = $_POST['Tone'];
    $bulto = $_POST['bulto'];
    $lote = $_POST['lote'];
   



	

	$query = "INSERT INTO solicitud_ins (numero_Cont,Fecha_Hora,lugar_ins,via,nombre_Solicicitante,Tipo_de_Op,Nombre_Ser,metodo_Trans,Traspor_Gondo,empaque,marca,Tone,bulto,lote) 
    VALUES('$numero_Cont','$fecha_Hora','$lugar_Ins','$via','$nombre_Solicicitante','$tipo_de_Op','$nombre_Ser','$metodo_Trans','$traspor_Gondo','$empaque','$marca','$tone','$bulto','$lote')";

	$res=mysqli_query($cn,$query);

	if($res){
			echo '<script type="text/javascript">alert("Agregado correctamente"); window.location="formularios.php";</script>';
		}else{
			die("Error".mysqli_error($cn));
		}
 ?>
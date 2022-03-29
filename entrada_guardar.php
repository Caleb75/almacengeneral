<?php 

	include ("conexion.php");


	$folioalm = $_POST['folioalm'];
    $encargado_us = $_POST['encargado_us'];
	$n_contenedor = $_POST['n_contenedor'];
    $medida = $_POST['medida'];
	$n_booking = $_POST['n_booking'];
	$n_bultos = $_POST['n_bultos'];
	$fh_llegada = $_POST['fh_llegada'];
	$refe_lote = $_POST['refe_lote'];
	$desc_merca = $_POST['desc_merca'];
    $clientes = $_POST['clientes'];
	$s_fiscal = $_POST['s_fiscal'];
	$s_adicional = $_POST['s_adicional'];
    $n_factura = $_POST['n_factura'];
    $p_neto = $_POST['p_neto'];
    $p_bruto = $_POST['p_bruto'];



	

	$query = "INSERT INTO entrada_alm (folioalm,encargado_us,n_contenedor,medida,n_booking,n_bultos,fh_llegada,refe_lote,desc_merca,clientes,s_fiscal,s_adicional,n_factura,p_neto,p_bruto) 
    VALUES('$folioalm','$encargado_us','$n_contenedor','$medida','$n_booking','$n_bultos','$fh_llegada','$refe_lote','$desc_merca','$clientes','$s_fiscal','$s_adicional','$n_factura','$p_neto','$p_bruto')";

	$res=mysqli_query($cn,$query);

	if($res){
			echo '<script type="text/javascript">alert("Agregado correctamente"); window.location="formularios.php";</script>';
		}else{
			die("Error".mysqli_error($cn));
		}
 ?>
<?php 

	include ("conexion.php");

	$agente_A = $_POST['agente_A'];
    $cliente = $_POST['cliente'];
	$buque = $_POST['buque'];
    $num_Cont = $_POST['num_Cont'];
	$medida_Cont = $_POST['medida_Cont'];
	$lineaTras = $_POST['lineaTras'];
	$nombreCon = $_POST['nombreCon'];
	$placasCa = $_POST['placasCa'];
    $pla_plataformas = $_POST['pla_plataformas'];
	$n_economico= $_POST['n_economico'];
    $destino = $_POST['destino'];
	$s_fiscal = $_POST['s_fiscal'];
	$t_mercancia = $_POST['t_mercancia'];
	$p_neto = $_POST['p_neto'];
	$p_bruto = $_POST['p_bruto'];
	$bultos = $_POST['bultos'];
	$lote = $_POST['lote'];
    $obser = $_POST['obser'];
    
   



	

	$query = "INSERT INTO tarja_exp (agente_A,cliente,buque,num_Cont,medida_Cont,lineaTras,nombreCon,placasCa,pla_plataformas,n_economico,destino,s_fiscal,t_mercancia,p_neto,p_bruto,bultos,lote,obser) 
    VALUES('$agente_A',' $cliente','$buque','$num_Cont ','$medida_Cont','$lineaTras','$nombreCon','$placasCa','$pla_plataformas','$n_economico','$destino','$s_fiscal','$t_mercancia','$p_neto','$p_bruto','$bultos ','$lote ','$obser')";

	$res=mysqli_query($cn,$query);

	if($res){
			echo '<script type="text/javascript">alert("Agregado correctamente"); window.location="formularios.php";</script>';
		}else{
			die("Error".mysqli_error($cn));
		}
 ?>
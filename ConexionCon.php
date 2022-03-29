<?php 

	include ("conexion.php");

	$fecha = $_POST['fecha'];
	$numeroR = $_POST['numeroR'];
    $fechaAct = $_POST['fechaAct'];
	$codigo = $_POST['codigo'];
	$descripcion = $_POST['descripcion'];
	$existencias = $_POST['existencias'];
	$entrada = $_POST['entrada'];
    $salida = $_POST['salida'];
	$stock = $_POST['stock'];
    $autorizo = $_POST['autorizo'];
	
    
   



	

	$query = "INSERT INTO control_inv (fecha,numeroR,fechaAct,codigo,descripcion,existencias,entrada,salida,stock,autorizo) 
    VALUES('$fecha','$numeroR','$fechaAct ','$codigo','$descripcion','$existencias','$entrada','$salida','$stock','$autorizo')";

	$res=mysqli_query($cn,$query);

	if($res){
			echo '<script type="text/javascript">alert("Agregado correctamente"); window.location="formularios.php";</script>';
		}else{
			die("Error".mysqli_error($cn));
		}
 ?>
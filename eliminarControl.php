<?php
	eliminarControl($_GET['id']);

	function eliminarControl($id){
		include 'conexion.php';
		$sentencia = "DELETE FROM control_inv WHERE id='".$id."' ";
		$resultado = mysqli_query($cn, $sentencia);
		if($resultado){
		header ("location: control_inveR.php");
	    }
	}

    ?>
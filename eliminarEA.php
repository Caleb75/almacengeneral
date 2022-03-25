<?php
	eliminarEA($_GET['id']);

	function eliminarEA($id){
		include 'conexion.php';
		$sentencia = "DELETE FROM entrada_alm WHERE id='".$id."' ";
		$resultado = mysqli_query($cn, $sentencia);
		if($resultado){
		header ("location: entradaR.php");
	    }
	}

    ?>
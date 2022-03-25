<?php
	eliminar_DU($_GET['identificador']);

	function eliminar_DU($identificador){
		include 'conexion.php';
		$sentencia = "DELETE FROM usuarios WHERE identificador='".$identificador."' ";
		$resultado = mysqli_query($cn, $sentencia);
		if($resultado){
		header ("location: agregar_us.php");
	    }
	}

    ?>
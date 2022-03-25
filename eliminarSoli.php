<?php
	eliminarSoli($_GET['id']);

	function eliminarSoli($id){
		include 'conexion.php';
		$sentencia = "DELETE FROM solicitud_ins WHERE id='".$id."' ";
		$resultado = mysqli_query($cn, $sentencia);
		if($resultado){
		header ("location: solicitudR.php");
	    }
	}

    ?>
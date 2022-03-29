<?php
	eliminarTarja($_GET['id']);

	function eliminarTarja($id){
		include 'conexion.php';
		$sentencia = "DELETE FROM tarja_exp WHERE id='".$id."' ";
		$resultado = mysqli_query($cn, $sentencia);
		if($resultado){
		header ("location: tarjaR.php");
	    }
	}

    ?>
<?php 
	include ("conexion.php");
	$identificador = $_POST['identificador'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$direccion = $_POST['direccion'];

	
	
	$nom=$_FILES['Foto']['name']; 
	$guardado=$_FILES['Foto']['tmp_name']; 
	
	 $directorio ="Fotos/";
	 $aleatorio = $nom;
	 $ruta = $aleatorio;
	 
	if(!file_exists($directorio )){
		mkdir($directorio ,0777,true);
		if(file_exists($directorio )){
	 
			if(move_uploaded_file($guardado, 'Fotos/'.$nom)){		
			}
		}
	}else{
			if(move_uploaded_file($guardado, $directorio.$aleatorio)){
		}elseif(move_uploaded_file($guardado, $directorio.$aleatorio)){	
		}
	}

	$query = "INSERT INTO clientes(identificador,nombre,telefono,email,direccion,Foto) VALUES('$identificador','$nombre','$telefono','$email','$direccion','$ruta')";

	$res=mysqli_query($cn,$query);

	if($res){
			echo '<script type="text/javascript">alert("Agregado correctamente"); window.location="vista_clientes.php";</script>';
		}else{
			die("Error".mysqli_error($cn));
		}
 ?>
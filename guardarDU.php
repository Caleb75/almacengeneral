<?php 

	include ("conexion.php");


	$identificador = $_POST['identificador'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$telefono = $_POST['telefono'];
	$email_user = $_POST['email_user'];
	$contraseña = $_POST['contraseña'];
	$rol_id = $_POST['rol_id'];
	$status = $_POST['status'];

	
	
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

	$query = "INSERT INTO usuarios(identificador,nombre,apellidos,telefono,email_user,contraseña,rol_id,status,Foto) VALUES('$identificador','$nombre','$apellidos','$telefono','$email_user','$contraseña','$rol_id','$status','$ruta')";

	$res=mysqli_query($cn,$query);

	if($res){
			echo '<script type="text/javascript">alert("Agregado correctamente"); window.location="agregar_us.php";</script>';
		}else{
			die("Error".mysqli_error($cn));
		}
 ?>

<?php
	
	require "conexion.php";
	
	session_start();
	
	if($_POST){
		
		$email_user = $_POST['email_user'];
		$contraseña = $_POST['contraseña'];
		
		$sql = "SELECT id, identificador, nombre, apellidos, contraseña, telefono, rol_id, status FROM usuarios WHERE email_user='$email_user'";
		//echo $sql;
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['contraseña'];
			
			$pass_c = ($contraseña);
			
			if($password_bd == $pass_c){
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['rol_id'] = $row['rol_id'];
				$query = "INSERT INTO login_logout('fk_usuario','fecha_log') VALUES ('".$_SESSION["id"] ."', current_timestamp())";
				$res=mysqli_query($cn,$query);
				
				header("Location:index.php");
				
			} else {
			
			echo "La contraseña no coincide";
			
			}
			
			
			} else {
			echo "NO existe usuario";
		}
		
		
		
	}
	
	
	
?>

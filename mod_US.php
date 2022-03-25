<?php

include('conexion.php');
$identificador =$_REQUEST['identificador'];

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$email_user = $_POST['email_user'];
$contraseña = $_POST['contraseña'];
$rol_id = $_POST['rol_id'];
$status = $_POST['status'];

$query="UPDATE usuarios SET identificador='$identificador', nombre='$nombre', apellidos ='$apellidos', telefono='$telefono', email_user='$email_user', contraseña='$contraseña', rol_id='$rol_id', status='$status' WHERE identificador='$identificador' ";
                    
$resultado = mysqli_query($cn, $query);
                            
if($resultado){                                    
    echo '<script type="text/javascript">alert("Archivo Actualizado correctamente"); window.location="agregar_us.php";</script>';
        }else{
    die("Error".mysql_error($cn));
}                                             
?>
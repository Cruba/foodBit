<?php
session_start();

//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['nombre']) and isset($_POST['correo'])){
    $nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
    $correo=($_POST['correo']);
    $pass=md5($_POST['password']);


   $sqlE = $conexion->query("UPDATE administrador SET nombre = '$nombre', correo = '$correo',  pass = '$pass' WHERE identificador = '".$_SESSION['id']."'");

				if($sqlE) {header('Location: configurar.php');
}
}
?>
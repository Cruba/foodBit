<?php
session_start();

//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['nombre'])  and isset($_POST['empresa']) and isset($_POST['telefono']) and isset($_POST['correo'])){
    $nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
    $identificador=($_POST['identificador']);
    $empresa=($_POST['empresa']);
    $file = $_FILES['image']['name'];
    $tel=($_POST['telefono']);
    $correo=($_POST['correo']);
    $direccion=($_POST['direccion']);
    $pass=md5($_POST['password']);


   $sqlE = $conexion->query("UPDATE solicitud SET nombre = '$nombre', empresa = '$empresa',  telefono = '$tel', correo = '$correo' WHERE identificador = '$identificador'");

				if($sqlE) {header('Location: consultabeneficiencias.php');
}
}
?>
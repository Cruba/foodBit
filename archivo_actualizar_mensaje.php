<?php
session_start();

//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['descripcion'])){
    $descripcion=($_POST['descripcion']);


   $sqlE = $conexion->query("UPDATE usuarios SET descripcion = '$descripcion'");

				if($sqlE) {header('Location: userindex.php?true=login');
}
}
?>
<?php
session_start();

//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_GET['usr'] )){
    $identificador=($_GET['usr']);
    $estado=(3);


   $sqlE = $conexion->query("UPDATE solicitud SET estado = '$estado' WHERE identificador = '$identificador'");

				if($sqlE) {header('Location: solicitudes.php');
}
}
?>
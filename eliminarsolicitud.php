<?php
session_start();

//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_GET['usr'] )){
    $identificador=($_GET['usr']);


   $sqlE = $conexion->query("DELETE FROM solicitud WHERE  identificador = '$identificador'");

				if($sqlE) {header('Location: consultabeneficiencias.php');
}
}
?>
<?php
$conexion=new mysqli('localhost','root','','foodbit2');


if($conexion->connect_errno) {
	echo "Falló la conexion a la base de datos";
}

return $conexion;

?>

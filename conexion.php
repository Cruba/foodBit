<?php
$conexion=new mysqli('localhost','root','','foodbit');


if($conexion->connect_errno) {
	echo "Falló la conexion a la base de datos";
}

return $conexion;

?>

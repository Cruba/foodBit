<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['nombre'])  and isset($_POST['correo']) and isset($_POST['password'])){
    $nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
    $correo=($_POST['correo']);
    $contraseña=md5($_POST['password']);
    $ingresar=mysqli_query($conexion,'insert into usuarios(nombre,correo,password) values
    ("'.$nombre.'","'.$correo.'","'.$contraseña.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
   header ('location: ./');
}//si no se enviaron datos
else{
    header ('location: ./');
}
?>
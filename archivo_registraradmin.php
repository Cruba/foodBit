<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['nombre']) and isset($_POST['correo']) and isset($_POST['pass']) ){
    $nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
    $correo=($_POST['correo']);
    $pass=md5($_POST['pass']);
    $ingresar=mysqli_query($conexion,'INSERT INTO administrador(nombre,correo, pass) VALUES
    ("'.$nombre.'","'.$correo.'","'.$pass.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección

   header ('location: adminindex.php?true=login');
}//si no se enviaron datos
else{
    header ('location: ./');
}
?>
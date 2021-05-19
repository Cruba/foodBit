<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['nombre']) and isset($_POST['empresa']) and isset($_POST['correo']) and isset($_POST['pass']) ){
    $nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
    $empresa=($_POST['empresa']);
    $foto = $_FILES['img']['name'];
    $ruta = $_FILES['img']['tmp_name'];
    $destino="fotos/".$foto;
    copy($ruta,$destino);
    $tel=($_POST['telefono']);
    $correo=($_POST['correo']);
    $direccion=($_POST['direccion']);
    $pass=md5($_POST['pass']);
    $ingresar=mysqli_query($conexion,'INSERT INTO usuarios(nombre,empresa,imagen,telefono,correo,direccion, pass) VALUES
    ("'.$nombre.'","'.$empresa.'","'.$destino.'","'.$tel.'","'.$correo.'","'.$direccion.'","'.$pass.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
   header ('location: iniciarsesion.?true=login');
}//si no se enviaron datos
else{
    header ('location: ./');
}
?>
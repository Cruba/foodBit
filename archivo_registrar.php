<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['nombre']) and isset($_POST['empresa']) and isset($_POST['correo']) and isset($_POST['pass']) ){
    $nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
    $file = $_FILES['image']['name'];
    $empresa=($_POST['empresa']);
    $tel=($_POST['telefono']);
    $correo=($_POST['correo']);
    $direccion=($_POST['direccion']);
    $pass=md5($_POST['pass']);
    $descripcion=($_POST['empresa']);

    $ingresar=mysqli_query($conexion,'INSERT INTO usuarios(nombre,empresa, imagen,telefono,correo,direccion, pass, 	descripcion) VALUES
    ("'.$nombre.'","'.$empresa.'","'.$file.'","'.$tel.'","'.$correo.'","'.$direccion.'","'.$pass.'","'.$descripcion.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección

    if($ingresar){
        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
    }

   header ('location: iniciarsesion.php?true=login');
}//si no se enviaron datos
else{
    header ('location: ./');
}
?>
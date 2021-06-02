<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['nombre'])  and isset($_POST['correo']) and isset($_POST['empresa']) ){
    $nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
    $idusuario=($_POST['idusuario']);
    $correo=($_POST['correo']);
    $tel=($_POST['telefono']);
    $empresa=($_POST['empresa']);
    $mensaje=($_POST['mensaje']);
    $estado=(0);
    $ingresar=mysqli_query($conexion,'INSERT INTO solicitud(nombre,idusuario,correo,telefono,empresa,mensaje, estado ) VALUES
    ("'.$nombre.'","'.$idusuario.'","'.$correo.'","'.$tel.'","'.$empresa.'","'.$mensaje.'","'.$estado.'")') or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
    $from = "earc_r@hotmail.com";
    $to = "alainsc.bc@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to , $subject , $message , $headers);
   header ('location: index.php?true=login');
   

}//si no se enviaron datos
else{
    header ('location: ./');
}
?>
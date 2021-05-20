<?php
session_start();
//si hay una sesión
if (isset($_SESSION['identificador'])){
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png">
    <title>FoodBit</title>
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/normalize.css">
    

</head>
<body class="fondogris">
<?php

require "conexion.php";

$sqlA = $conexion->query("SELECT * FROM usuarios WHERE identificador = '".$_SESSION['id']."'");
$rowA = $sqlA->fetch_array();

?>
    <header class="header2">
        <div class="contenedor">
            <div class="barra">
                <a class="logo no-margin centrar-texto" href="index.php">
                    <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1></a>
                    
                    <nav class="navegacion">
                    <a href="userindex.php" class="navegacion__enlace">Inicio usuario</a>
                        <a href="solicitudes.php" class="navegacion__enlace">Solicitudes</a>
                        <a href="configurar.php" class="navegacion__enlace">Configurar</a>
                        <a href="cerrar_sesion.php" class="navegacion__enlace">Salir</a>

                    </nav>
    
            </div>
        </div>
    </header>

    <section class="cabecera">
        <div class="contenedor">
            <h1 class="centrar-texto">Bienvenido             <?php echo   $_SESSION['nombre']; ?> </h1>
            <img src="<?php echo $rowA['imagen'];?>" alt="">

            <div class="spacer-30 "></div>
            <form class="formulario fondoblanco" method="post" action="archivo_actualizar_mensaje.php">
            <div class="barrita"></div>
            
            <?php

if(isset($_GET['true'])) {
    echo "<br>";
  echo "<center class='mensaje exitoso'>Mensaje actualizado con exito</center>";
}else {

}
?>
            <h2>Configurar</h2>
            <div class="margin-2">
                    <label class="campo__label2" for="descripcion">Descripción del servicio</label>
                    <textarea name="descripcion" type="text"  class="campo__field2" id="password" cols="30" rows="5"><?php echo $rowA['descripcion'];?></textarea>
                </div>
                <div class="">
                    <input type="submit" value="Actualizar" class="boton2 boton--primario">
                </div>
            </form>
        
        </div>
        <div class="spacer-30 "></div>
        <div class="spacer-30 "></div>

        </div>
    </section>



    <footer class="footer">
        <div class="contenedor">

        </div>

    </footer>
</body>
</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>
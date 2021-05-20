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

    <main>
        <div class="spacer-30"></div>
        <main class=" ">
            <div class="contenedor2">

            <form class="formulario fondoblanco" method="post" action="archivo_actualizar.php"   enctype="multipart/form-data">
                <div class="barrita"></div>
                <h2>Configurar</h2>
                <div class="margin-2">
                    <label class="campo__label2" for="nombre">Nombre</label>
                    <input class="campo__field2" type="text" id="nombre" name="nombre" value="<?php echo $rowA['nombre'];?>">
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="empresa">Empresa</label>
                    <input class="campo__field2" type="text" id="empresa" name="empresa" value="<?php echo $rowA['empresa'];?>" >
                </div>
                <div class="margin-2">
                    <label class="campo__field2 fondoprimario" for="image">Cambiar logo de la empresa</label>
                    <input type="file" id="image" name="image"  class=" desaparecer">
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="tel">Telefono</label>
                    <input class="campo__field2" type="tel" id="tel" name="telefono" value="<?php echo $rowA['telefono'];?>">
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="email">Correo</label>
                    <input class="campo__field2" type="email" id="email" name="correo" value="<?php echo $rowA['correo'];?>">
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="razon">Direcciòn</label>
                    <input class="campo__field2" type="text" id="razon" name="direccion" value="<?php echo $rowA['direccion'];?>">
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="password">Contraseña</label>
                    <input name="password" type="password"  class="campo__field2" id="password"  value="pass">
                </div>
                <div class="">
                    <input type="submit" value="Actualizar" class="boton2 boton--primario">
                </div>
            </form>

        </div>
        </main>
            <div class="spacer-30"></div>




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
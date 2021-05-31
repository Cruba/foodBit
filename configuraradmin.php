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

$sqlA = $conexion->query("SELECT * FROM administrador WHERE identificador = '".$_SESSION['id']."'");
$rowA = $sqlA->fetch_array();

?>
    <header class="header2">
        <div class="contenedor">
            <div class="barra">
                <a class="logo no-margin centrar-texto" href="index.php">
                    <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1></a>
                    
                    <nav class="navegacion">
                    <a href="consultabeneficiencias.php" class="navegacion__enlace">Beneficiencias</a>
                        <a href="registroadministradores.php" class="navegacion__enlace">Nuevo administrador</a>
                        <a href="configuraradmin.php" class="navegacion__enlace">Configurar</a>
                        <a href="cerrar_sesion.php" class="navegacion__enlace">Salir</a>

                    </nav>
    
            </div>
        </div>
    </header>

    <main>
        <div class="spacer-30"></div>
        <main class=" ">
            <div class="contenedor2">

            <form class="formulario fondoblanco" method="post" action="archivo_actualizaradmin.php"   enctype="multipart/form-data">
                <div class="barrita"></div>
                <h2>Configurar</h2>
                <div class="margin-2">
                    <label class="campo__label2" for="nombre">Nombre</label>
                    <input class="campo__field2" type="text" id="nombre" name="nombre" value="<?php echo $rowA['nombre'];?>">
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="email">Correo</label>
                    <input class="campo__field2" type="email" id="email" name="correo" value="<?php echo $rowA['correo'];?>">
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
        <div class="contenedor fondo">

        </div>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src=" https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script src="js/inputmask.js"></script>

</body>
</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>
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
    <header class="header2">
        <div class="contenedor">
            <div class="barra">
                <a class="logo no-margin centrar-texto" href="index.html">
                    <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1></a>
                    
                    <nav class="navegacion">
                        <a href="Solicitudes.html" class="navegacion__enlace">Solicitudes</a>
                        <a href="configurar.html" class="navegacion__enlace">Configurar</a>
                        <a href="cerrar_sesion.php" class="navegacion__enlace">Salir</a>

                    </nav>
    
            </div>
        </div>
    </header>

    <section class="cabecera">
        <div class="contenedor">
            <h1 class="centrar-texto">Bienvenido             <?php echo   $_SESSION['nombre']; ?> </h1>

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
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
    <link href="css/stacktable.css" rel="stylesheet">


</head>
<body class="fondogris">
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
            <div class="contenedor">
            <div class="formulario fondoblanco" action="">
                <div class="barrita"></div>
                    <h2>Solicitudes</h2>
                    <table id="websendeos">
                    <tr>
                             <th>Nombre</th>
                             <th>Correo</th>
                             <th>Telefono</th>
                             <th>Beneficiencia y/o Empresa</th>
                             <th>Mensaje</th>
                        </tr>
                    <?php
  		require "conexion.php";
    
        $query="SELECT * FROM solicitud WHERE idusuario = '".$_SESSION['id']."'";
        $resultado = $conexion->query($query) or die ("Error al consultar usuario: ".mysqli_error($conexion));
        while ($filas=$resultado->fetch_array())
        {

      ?>

                        <tr>
                             <td><?php echo $filas[2]?></td>
                             <td><?php echo $filas[3]?></td>
                             <td><?php echo $filas[4]?></td>
                             <td><?php echo $filas[5]?></td>
                             <td><?php echo $filas[6]?></a></td>
                        </tr>
                        <?php
        }
      ?>
                    </table>

                </div>
            
        </div>
        </main>
            <div class="spacer-30"></div>




    <footer class="footer">
        <div class="contenedor">

        </div>

    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/stacktable.js"></script>
<script>
    $('#websendeos').stacktable();
</script>
</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>
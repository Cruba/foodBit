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
            <?php


function ConsultarUsuario($id){
    include 'conexion.php';
    
    $query="SELECT * FROM solicitud WHERE identificador= '".$id."' ";
        $resultado= $conexion->query($query) or die ("Error al consultar usuario: ".mysqli_error($conexion) );
        while ($filas=$resultado->fetch_array()){

			?>

            <form class="formulario fondoblanco" method="post" action="actualizarsolicitud.php"   enctype="multipart/form-data">
                <div class="barrita"></div>
                <h2>Editar solicitud de <?php echo $filas['empresa'];?> </h2>
                <div class="margin-2">
                    <label class="campo__label2" for="nombre">Identificador</label>
                    <input class="campo__field2" type="text" id="identificador" name="identificador" value="<?php echo $filas[0]?>" readonly>
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="nombre">Nombre</label>
                    <input class="campo__field2" type="text" id="nombre" name="nombre" value="<?php echo $filas[2]?>">
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="empresa">Empresa</label>
                    <input class="campo__field2" type="text" id="empresa" name="empresa" value="<?php echo $filas['empresa'];?>" >
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="tel">Telefono</label>
                    <input class="campo__field2" type="tel" id="tel" name="telefono"  value="<?php echo $filas['telefono'];?>" data-inputmask="'mask': '999 999 9999'">
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="email">Correo</label>
                    <input class="campo__field2" type="email" id="email" name="correo" value="<?php echo $filas['correo'];?>">
                </div>
                <div class="margin-2">
                    <label class="campo__label2" for="razon">Mensaje</label>
                    <input class="campo__field2" type="text" id="razon" name="direccion" value="<?php echo $filas['mensaje'];?>" readonly>
                </div>
               
                <div class="">
                    <input type="submit" value="Actualizar" class="boton2 boton--primario">
                </div>
            </form>
            <?php
        }
        }
        $consulta = ConsultarUsuario($_GET['usr']);

      ?>
        </div>
        </main>
            <div class="spacer-30"></div>




    <footer class="footer">
        <div class="contenedor">

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
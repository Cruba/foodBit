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

<body>
<?php


if(isset($_GET['usr'])) {

}
elseif(isset($_GET['true'])) {
  echo "<center class='mensaje exitoso'>Solicitud enviada con exito, espera a que se contacten contigo</center>";
}else {
    echo "<center class='mensaje fallido'>Algo fallo, favor de realizar de nuevo la solicitud</center>";

}
?>
            <?php

$consulta = ConsultarUsuario($_GET['usr']);

function ConsultarUsuario($id){
    include 'conexion.php';
    
    $query="SELECT * FROM usuarios WHERE identificador= '".$id."' ";
        $resultado= $conexion->query($query) or die ("Error al consultar usuario: ".mysqli_error($conexion) );
        while ($filas=$resultado->fetch_array()){

    




				
				

			?>


    <header class="header">
        <div class="header__color">
            <div class="contenedor">
                <div class="barra">
                    <a class="logo no-margin centrar-texto" href="index.php">
                        <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1>
                    </a>

                    <nav class="navegacion">
                    <a href="index.php" class="navegacion__enlace">Inicio</a>
                            <a href="benefactores.php" class="navegacion__enlace">Benefactores</a>
                            <a href="registrar.html" class="navegacion__enlace">Registrar</a>
                            <a href="iniciarsesion.php" class="navegacion__enlace">Iniciar Sesiòn</a>

                    </nav>
                </div>
            </div>
            <div class="header__texto">
                <h2 class="no-margin">Solicitar</h2>
                <p class="no-margin blanco"> <?php echo $filas['empresa']?></p>
            </div>
        </div>
    </header>



    <main>
        <div class="contenedor">
            <h1 class="centrar-texto">Solicitud</h1>


            <form action="archivo_solicitar.php" method="POST" class="form-solicitud">
                <div class="campo">
                    <label class="campo__label2" for="nombre">Nombre</label>
                    <input class="campo__field2" type="text" id="nombre" name="nombre" >
                </div>
                <div class="campo">
                    <label class="campo__label2" for="email">Correo</label>
                    <input class="campo__field2" type="email" id="email" name="correo">
                </div>
                <div class="campo">
                    <label class="campo__label2" for="email">Beneficiencia solicitada</label>
                    <input class="campo__field2" type="text" id="" name="" value=" <?php echo $filas['empresa']?> " readonly>  
                </div>   

                <div class="campo">
                    <label class="campo__label2" for="email" readonly>Id empresa</label>
                    <input class="campo__field2" type="email" id="email" name="idusuario" value=" <?php echo $filas['identificador']?> "  readonly>  
                </div>   

                <div class="campo">
                    <label class="campo__label2" for="telefono">Telefono</label>
                    <input class="campo__field2" type="telefono" id="telefono" name="telefono" data-inputmask="'mask': '999 999 9999'">
                </div>
                <div class="campo">
                    <label class="campo__label2" for="razon">Beneficiencia y/o Empresa</label>
                    <input class="campo__field2" type="text" id="nombre" name="empresa"> 
                </div>
                <div class="campo">
                    <label class="campo__label2" for="mensaje">Mensaje</label>
                    <textarea name="mensaje"   class="campo__field2 campo__field-textarea2" id="mensaje" cols="30" rows="10"></textarea>
                </div>
                <div class="campo">
                    <input type="submit" value="Enviar Solicitud" class="boton boton--primario">
                    <br>
                    <?php
        }
        }
      ?>
                </div>
            </form>
        </div>
    </main>
   <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo no-margin centrar-texto" href="index.php">
                    <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1>
                </a>

                <nav class="navegacion">
                <a href="index.php" class="navegacion__enlace">Inicio</a>
                            <a href="benefactores.php" class="navegacion__enlace">Benefactores</a>
                            <a href="registrar.html" class="navegacion__enlace">Registrar</a>
                            <a href="iniciarsesion.php" class="navegacion__enlace">Iniciar Sesiòn</a>

                </nav>

            </div>
        </div>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src=" https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script src="js/inputmask.js"></script>

</body>

</html>
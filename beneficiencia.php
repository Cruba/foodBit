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
                <h2 class="no-margin">Benefactor</h2>
                <p class="no-margin blanco"> <?php echo $filas['empresa']?></p>
            </div>
        </div>
    </header>

    <main>
        <div class="contenedor">
            <h1 class="centrar-texto"><?php echo $filas['empresa']?></h1>

            <div class="informacion">
                <div class="info-benefactor">
                    <img src="<?php echo $filas['imagen'];?>" alt="" class="info-imagen">
                </div>
                <div class="info-benefactor">
                    <h4 class="no-margin">Empresa:</h4>
                    <p class="no-margintop"><?php echo $filas['empresa']?></p>
                    <h4 class="no-margin">Contacto:</h4>
                    <p class="no-margintop"><span>Telefono </span> <?php echo $filas['telefono']?></p>
                    <p class="no-margintop"><span>Correo </span><?php echo $filas['correo']?></p>
                    <h4 class="no-margin">Ubicación:</h4>
                    <p class="no-margintop"> <?php echo $filas['direccion']?></p>
                    
                   <a href="solicitar.php?usr=<?php echo $filas['identificador'] ?> " class="pointer"> <button type="submit" value="Contactar" class="boton2 boton--primario pointer" > Contactar</button> </a>
                </div>
            </div>

            <div class="descripcion">
                <h4>Descripción</h4>
                <p><?php echo $filas['descripcion']?></p>
            </div>
        </div>
    </main>
    <?php
        }
        }
      ?>
    <div class="spacer-20"></div>

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
</body>

</html>
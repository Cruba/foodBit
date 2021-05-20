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
                <h2 class="no-margin">Benefactores</h2>
                <p class="no-margin blanco"> Plataforma de donacion de Alimentos.</p>
            </div>
        </div>
    </header>

    <section class="benef">
        <div class="contenedor">
            <div class="nosotros-principal">
                <h1 class="centrar-texto no-margin benef-titulo">Beneficiencias</h1>
            </div>
            <div class="benef-prinicipal">
                <div class="benef-info">
                    <p class="centrar-texto">Consulta nuestra amplia lista de benefactores, y postulate para considerar
                        tu causa</p>
                </div>

            </div>
        </div>
    </section>

    <main class="contenedor">

        <div class="benefactores-lista">

        <?php
    require "conexion.php";

  $query="SELECT * FROM usuarios ";
  $resultado = $conexion->query($query) or die ("Error al consultar usuario: ".mysqli_error($conexion));
  while ($filas=$resultado->fetch_array())
  {

?>

            <div class="benefactores">
                <a href="beneficiencia.php?usr= <?php echo $filas['identificador'] ?> ">
                    <img class="benfactores__imagen" src="img/benefactor1.png" alt="imagen de applebees">
                    <div class="benefactores__info">
                        <p class="benefactores__nombre "> <?php echo $filas[2]?> </p>
                    </div>
                </a>
            </div>

            <?php
        }
      ?>

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
</body>

</html>
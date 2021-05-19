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

<body >
    <header class="header">
        <div class="header__color">
            <div class="contenedor">
                <div class="barra">
                    <a class="logo no-margin centrar-texto" href="index.html">
                        <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1>
                    </a>

                    <nav class="navegacion">
                        <a href="index.html" class="navegacion__enlace">Inicio</a>
                        <a href="benefactores.html" class="navegacion__enlace">Benefactores</a>
                        <a href="registrar.html" class="navegacion__enlace">Registrar</a>
                        <a href="iniciarsesion.html" class="navegacion__enlace">Iniciar Sesiòn</a>

                    </nav>
                </div>
            </div>
            <div class="header__texto">
                <h2 class="no-margin">Solicitar</h2>
                <p class="no-margin blanco"> Applebee`s.</p>
            </div>
        </div>
    </header>



    <main>
        <div class="contenedor">
            <h1 class="centrar-texto">Solicitud</h1>
            <?php
    if(isset($_GET['true'])) {
      echo "<center class='mensaje exitoso'>Solicitud enviada con exito, espera a que se contacten contigo</center>";
    }
    else{
        echo "<center class='mensaje fallido'>Algo fallo, favor de realizar de nuevo la solicitud</center>";

    }
    ?>
            <form action="archivo_solicitar.php" method="POST" class="form-solicitud">
                <div class="campo">
                    <label class="campo__label2" for="nombre">Nombre</label>
                    <input class="campo__field2" type="text" id="nombre" name="nombre">
                </div>
                <div class="campo">
                    <label class="campo__label2" for="email">Correo</label>
                    <input class="campo__field2" type="email" id="email" name="correo">
                </div>
                <div class="campo">
                    <label class="campo__label2" for="tel">Telefono</label>
                    <input class="campo__field2" type="tel" id="tel" name="Telefono">
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

    ?>
                </div>
            </form>
        </div>
    </main>



    <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo no-margin centrar-texto" href="index.html">
                    <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1>
                </a>

                <nav class="navegacion">
                    <a href="index.html" class="navegacion__enlace">Inicio</a>
                    <a href="benefactores.html" class="navegacion__enlace">Benefactores</a>
                    <a href="registrar.html" class="navegacion__enlace">Registrar</a>
                    <a href="iniciarsesion.html" class="navegacion__enlace">Iniciar Sesiòn</a>

                </nav>

            </div>
        </div>

    </footer>
</body>

</html>
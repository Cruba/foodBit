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
                        <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1></a>
                        
                        <nav class="navegacion">
                            <a href="index.php" class="navegacion__enlace">Inicio</a>
                            <a href="benefactores.php" class="navegacion__enlace">Benefactores</a>
                            <a href="registrar.html" class="navegacion__enlace">Registrar</a>
                            <a href="iniciarsesion.php" class="navegacion__enlace">Iniciar Sesiòn</a>

                        </nav>
                </div>
            </div>
            <div class="header__texto">
                <h2 class="no-margin">FoodBit</h2>
                <p class="no-margin blanco"> Plataforma de donacion de Alimentos.</p>
            </div>
        </div>
    </header>

    <section class="nosotros">
        <div class="contenedor">
            <div class="nosotros-principal">
            <?php

if(isset($_GET['true'])) {
    echo "<br>";
  echo "<center class='mensaje exitoso'>Solicitud enviada con exito, espera a que se contacten contigo</center>";
}else {

}
?>
            <h1 class="centrar-texto">Nosotros</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maxime perspiciatis quod nulla ex nisi eos ut ratione accusantium reiciendis! Corporis, possimus quibusdam. In accusantium doloremque, beatae ipsa blanditiis doloribus voluptatum assumenda commodi quia quasi nemo harum quod ducimus itaque officia sapiente dolores ratione rem, reiciendis fuga iure iusto. Exercitationem?</p>
            </div>
            <div class="nosotros-secundario">
                <div class="mision">
                    <h2 class="nosotros-secundario__titulo">Mision</h2>
                    <p class="centrar-texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut assumenda possimus mollitia pariatur, sint exercitationem sapiente facilis, voluptas accusantium doloremque, nesciunt vel necessitatibus nisi culpa?</p>
                </div>
                <div class="vision">
                    <h2 class="nosotros-secundario__titulo">Vision</h2>
                    <p class=" centrar-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ut itaque, doloremque possimus nemo perspiciatis, fugit minus ullam aspernatur nisi quam, beatae laboriosam molestias saepe!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contacto">
        <div class="contenedor">
            <h1 class="centrar-texto contacto__titulo">Contacto</h1>
            <form class="formulario" action="email.php" method = "post">
                <div class="campo">
                <label class="campo__label"  for="nombre">Nombre</label>
                <input name="name" type="text" class="campo__field" placeholder="" id="nombre">
              </div>
              <div class="campo">
                <label class="campo__label" for="email">Correo Electrónico</label>
                <input name="email" type="email" class="campo__field" placeholder="" id="email">
                </div>
                <div class="campo">
                <label class="campo__label" for="mensaje">Mensaje</label>
                <textarea name="message"  class="campo__field  "id="mensaje" cols="30" rows="10"></textarea>
                </div>
                <div class="campo">
                    <input type="submit" placeholder="enviar" class="boton boton--primario">
                </div>
            </form>
        </div>
    </section>


    <section class="principales">
        <div class="contenedor">
            <h1 class="centrar-texto principales__titulo"> Principales Benefactores</h1>

            <div class="principales-benef">
                <img src="img/benefactor1.png" alt="" class="principales-benef__imagen">
                <img src="img/benefactor2.png" alt="" class="principales-benef__imagen">
                <img src="img/benefactor3.png" alt="" class="principales-benef__imagen">
                <img src="img/benefactor4.png" alt="" class="principales-benef__imagen">
                <img src="img/benefactor5.png" alt="" class="principales-benef__imagen">
                <img src="img/benefactor6.png" alt="" class="principales-benef__imagen">

            </div>
        
        </div>
    </section>
        <div class="spacer-20"></div>


    <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo no-margin centrar-texto" href="index.php">
                    <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1></a>
                    
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
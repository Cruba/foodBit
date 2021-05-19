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
    


    <?php
    if(isset($_POST['entrar'])) {

      require("conexion.php");

      $correo = $conexion ->real_escape_string($_POST['correo']);
      $password = md5($_POST['password']);

      $consulta = "SELECT correo,pass,identificador, nombre FROM usuarios WHERE correo = '$correo' AND pass = '$password'";

      if($resultado = $conexion->query($consulta)) {
        while($row = $resultado->fetch_array()) {

          $userok = $row['correo'];
          $passok = $row['pass'];
          $id = $row['identificador'];
          $name = $row['nombre'];

        }
        $resultado->close();
      }
      $conexion->close();


      if(isset($correo) && isset($password)) {

        if($correo == $userok && $password == $passok) {

          session_start();
          $_SESSION['identificador'] = TRUE;
          $_SESSION['nombre'] = $name;
          $_SESSION['correo'] = $userok;
          $_SESSION['id'] = $id;
          header("Location: userindex.php");

        }

        else {

          Header("Location: iniciarsesion.php?error=login");

        }

      }


    }  ?>
</head>
<body class="fondogris">
    <header class="header2">
        <div class="contenedor">
            <div class="barra">
                <a class="logo no-margin centrar-texto" href="index.html">
                    <h1 class="logo__nombre">Food<span class="logo__bold">Bit.</span></h1></a>
                    
                    <nav class="navegacion">
                       
                        <a href="registrar.html" class="navegacion__enlace">Registrar</a>

                    </nav>

            </div>
        </div>
    </header>
    <div class="spacer-30"></div>

    <div class="spacer-30"></div>
    <main class=" ">
        <div class="contenedor2">
        <form class="formulario fondoblanco" action="" method="post">
            <div class="barrita"></div>
            <h2>Iniciar Sesión</h2>
            <div class="margin-2">
                <label class="campo__label2" for="email">Correo</label>
                <input class="campo__field2" type="email" id="email" name="correo" required>
            </div>
            <div class="margin-2">
                <label class="campo__label2" for="password">Contraseña</label>
                <input name="password" type="password"  class="campo__field2" id="password"  required>
            </div>
            <div class="">
                <input type="submit" value="Iniciar Sesión" class="boton2 boton--primario" name="entrar">
                <?php
    if(isset($_GET['error'])) {
      echo "<center>Error el usuario o contraseña no coinciden</center>";
    }
    ?>
            </div>
        </form>
    </div>
    </main>
        <div class="spacer-30"></div>
        <div class="spacer-30"></div>
        <div class="spacer-30"></div>


    <footer class="footer">
        <div class="contenedor">

        </div>

    </footer>
</body>
</html>
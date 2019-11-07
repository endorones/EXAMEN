<?php
$ancho=isset($_POST['ancho'])? $_POST['ancho']:null;
$largo=isset($_POST['largo'])? $_POST['largo']:null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Rectangulo</title>
</head>
<body>
<header>

    <div class="menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="inicio.php" ><i>Inicio</i></a></li>
        <li><a href="#"class="active"><i>Rectangulo</i></a></li>
        <li><a href="circulo.php"><i>Circulo</i></a></li>
        </ul>
    </nav>
    <div class="clearfix"></div>

  </header>
    <form action="rectangulo.php" method="POST">

    <input type="text" name="ancho" id="" placeholder="Ancho">
    <input type="text" name="largo" id="" placeholder="Largo">
    <input type="submit" value="Guardar">
    </form>
    <div>
    <p>
    <?php
    $area=$ancho*$largo;
    echo 'El area es:'.$area.'<br>';
    ?>
    </p>
    </div>
    </body>
</html>
<?php
$radio=isset($_POST['radio'])? $_POST['radio']:null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Circulo</title>
</head>
<body>
<header>

    <div class="menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="inicio.php"><i>Inicio</i></a></li>
        <li><a href="rectangulo.php"><i>Rectangulo</i></a></li>
        <li><a href="#"class="active"><i>Circulo</i></a></li>
        </ul>
    </nav>
    <div class="clearfix"></div>
  </header>
<form action="circulo.php" method="POST">
<input type="text" name="radio" id="" placeholder="Radio">
<input type="submit" value="Guardar">
</form>
<div>
<p>
<?php
$area=3.1416*($radio*$radio)/2;
echo 'El area es:'.$area.'<br>';
?>
</p>


</div>

</div>
</body>
</html>
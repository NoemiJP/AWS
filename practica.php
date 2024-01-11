<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<p> Hola </p>"
    ?>
     <?php //No se puede tener cachos de código dentro uno de otro.
    echo "<p> Hola </p>"
    ?>
    
    <?php
      $saludo="Bienvenidos/as";
    echo "<p> $saludo</p>"
    ?>

     <?php //Es el mismo código que lo anterior
      $saludo="Bienvenidos/as";
      ?>
    <?php
       echo "<p> $saludo</p>";
      ?>

    <?php
       echo "<p>Buenos días \n</p>";
      ?>
      <p>Curso 2023/2024</p>


</body>
</html>
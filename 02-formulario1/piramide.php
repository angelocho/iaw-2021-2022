<?php 
$asterisco="*";
$numero=$_POST["numero"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
</head>
<body>
        <!-- Hay que hacer un txt number y un boton, 
        una vez se envie solo tiene que mostrar 
        las piramides
        -->
        <form action="piramide.php" method=POST>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="enviar">
        <?php 
        for ($i=1; $i <= $numero; $i++){ $asterisco++; } ?>

        </form>
</body>
</html>
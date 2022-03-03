<?php 
session_start();

if (!isset($_SESSION["num"])){
    $_SESSION["num"] = 0;   
}

if (isset($_POST["enviar"])){
    $index = $_SESSION["num"];
    $_SESSION["producto".$index]=$_POST["texto"];
    $_SESSION["cantidad".$index]=$_POST["numero"];
    $_SESSION["num"] = $index + 1;
    
}

print_r($_POST);
print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <form method="POST" action="sesiones.php">
        <input type="text" name="texto" id="texto">
        <input type="number" name="numero" id="numero" >
        <input type="submit" name="enviar" value="enviar">
    </form>
   <!-- Los benditos NAME !!!!-->
    <ul>
    <?php 
        foreach ($_SESSION as $valor) {
            echo $valor;

        }
    
    
    ?>
    </ul>

</body>
</html>
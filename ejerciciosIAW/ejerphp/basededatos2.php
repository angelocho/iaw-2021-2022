<?php 
include("accesoadatos.php");
$nombre = $_POST['nombre'];
$porcentajes = "%".$nombre."%";

$select = $conexion_bd->prepare("SELECT * FROM clientes WHERE nom LIKE :caracter;");
$select->execute(array(':caracter' => $porcentajes));



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIKE BASE DE DATOS</title>
</head>
<body>

<form action="basededatos2.php" method="post">
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="enviar" name="enviar">
    <?php if (isset($_POST["enviar"])) { ?>
       <?php 
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            $db_col = $row['nom'];
            echo "$db_col <br>";
        }
        ?>
    <?php } ?>
</form>

</body>
</html>
<?php 
session_start();

if(!isset($_SESSION['numeroaleatorio'])){
    $numeroaleatorio = rand(0,15);
    $_SESSION['numeroaleatorio'] = $numeroaleatorio;
}else{
    $numeroaleatorio = $_SESSION['numeroaleatorio'];
    $numero = $_POST['numero'];
    if($numero == ""){
        $_SESSION['numero'] = $numero;
        echo "Escoge un numero";
    }else{
        if($numero < $numeroaleatorio){
            echo "Es mayor";
        }elseif($numero > $numeroaleatorio){
            echo "Es menor";
        }else{
            echo "Acertaste";
        }
    }
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina Numero</title>
</head>
<body>
    <h1>Escoge del 0 al 15</h1>
    <div><?=$numeroaleatorio?> </div>
    <form action="index.php" method="POST"> 
    <input type="number" name="numero" id="numero">
    <input type="submit" value="enviar" name="enviar">
    </form>


</body>
</html>
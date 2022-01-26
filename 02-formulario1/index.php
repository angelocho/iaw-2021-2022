<?php 
$bienvenido=true;
$asterisco="*";
$numero="";

#print_r($_POST);

if(isset($_POST["enviar"])){
    $bienvenido=false;
    $numero=$_POST["numero"];   
}

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
        <?php if($bienvenido) { ?>
        <h1>Bienvenido!!!</h1>
        <form action="index.php" method=POST>
        <input type="number" name="numero" id="numero">
        <input type="submit" name="enviar" value="enviar">
        <?php } ?>
        
        <?php if($bienvenido == false){ 
            for ($i=1; $i <= $numero; $i++){
                for($c=1; $c <= $i; $c++){
                echo "<span style=color:"."#".rand(0,999999).">".$asterisco."</span>"; 
                }
                echo "<br>";
            }
         ?>


        <?php } ?>

        </form>
</body>
</html>
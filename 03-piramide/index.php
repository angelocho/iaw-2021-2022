<?php 
$enviado=false;
$asterisco="*";
$numero="";

#print_r($_POST);

if(isset($_POST["numero"])){
    $numero=$_POST["numero"];   
    $enviado=true;
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
 <?php   if(isset($_POST["numero"])){ 


echo '<meta http-equiv="refresh" content="1;url=http://localhost:9000/index.php?&numero='. $numero . '">';          
     ?>
<?php } ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="indexstyle.css">
    <title>Piramide</title>
</head>
<body>
        <!-- Hay que hacer un txt number y un boton, 
        una vez se envie solo tiene que mostrar 
        las piramides
        -->
        <div id=contenido>
        <?php if($enviado == false) { ?>
        <h1>Bienvenido!!!</h1>
        <form action="index.php" method=POST>
        <input type="number" name="numero" id="numero">
        <input type="submit" name="enviar" value="enviar">
        
        <?php } else { 
            for ($i=1; $i <= $numero; $i++){
                for($c=1; $c <= $i; $c++){
                #echo "<span style=color:"."#".rand(0,999999).">".$asterisco."</span>"; 
                echo "<span style=color:".sprintf("#%06X", mt_rand(0, 0xFFFFFF)).">".$asterisco."</span>"; 
  
            }
                echo "<br>";
            }
         ?>
        <?php } ?>

        </form>
        </div>
</body>
</html>
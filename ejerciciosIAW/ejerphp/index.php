<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (!isset($_GET["add"])){ ?>    
        <h1>Bienvenido al selector de frutas</h1>
    <?php } ?>
<a href="index.php?add=pera"><img src="./pera.jpg" /></a>
<a href="index.php?add=manzana"><img src="./manzana.jpg" width=200 /></a>
<a href="index.php?add=melocoton"><img src="./melocoton.jpg" width=225 /></a>
<?php

$fruta = $_GET["add"];

#$contadorperas = 0 ;
#$contadormanzanas = 0 ;
#$contadormelocoton = 0 ;






print_r($_COOKIE);


 if($fruta == "pera"){ 
    echo "<h1>"."Gracias por elegir pera"."</h1>"; 
   
    if(isset($_COOKIE['contp'])){
        $contadorperas=$_COOKIE['contp'];
        
    }else {
        $_COOKIE['contp']=1;
    }
    $contadorperas = $contadorperas + 1;
    setcookie("contp", $contadorperas);


    
    }elseif($fruta == "manzana"){ 
     echo "<h1>"."Gracias por elegir manzana"."</h1>"; 
    }elseif($fruta == "melocoton"){ 
        echo  "<h1>"."Gracias por elegir melocoton"."</h1>"; 
    }else{
        echo "<h1>"."Fruta no reconocida"."</h1>";
    }
?>

</body>
</html>
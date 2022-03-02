

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola cansino</title>
</head>
<body>
    <form method="POST" action="holacansino.php">
    <input type="text" name="texto" id="texto">
    <input type="number" name="numero" id="numero">
    <input type="submit" value="enviar" name="enviar">


    <?php 
    if (isset($_POST["enviar"])){
    $texto=$_POST["texto"];
    $numero=$_POST["numero"]; 
        for ($i=0; $i <= $numero; $i++) { 
            echo "<br>";
        echo "<span style=color:".sprintf("#%06X", mt_rand(0, 0xFFFFFF)).";background-color:".sprintf("#%06X", mt_rand(0, 0xFFFFFF)).">".$texto."</span>";        
         }
    }?>
</form>
</body>
</html>
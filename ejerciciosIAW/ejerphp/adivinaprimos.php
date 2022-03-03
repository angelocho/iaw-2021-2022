<?php 


session_start();

if(isset($_POST["enviar"])){
    $numero = $_POST["numero"];
    $_SESSION["numero"] = $numero;
    print_r($_SESSION);
}else{
    $acertados = $_SESSION["acertados"]; 
    $numero = $_SESSION["numero"];
    #$numeroanterior = $_SESSION["numero"];

    print_r($_SESSION);
    function esPrimo($numero){
    if(!is_numeric($numero)){
        //Comprobamos si es un número valido, ya que sino nos dara un error 500. 
        return false;
    }
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            // No es primo :(
            return false;

        }

    }
    // Es primo :)
    return true;
    }
    if(esPrimo($numero)){
        #echo 'Es primo';
      #  if ($numeroanterior != $numero){
        $acertados = $acertados + 1;
        $_SESSION["acertados"] = $acertados;
       # }
    }else{
        echo 'No es primo';
    }
    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina Primos</title>
</head>
<body>
    
<form action="adivinaprimos.php" method="post">
<input type="number" name="numero" id="numero" min=10000>
<input type="submit" value="enviar" name="enviar">
</form>

<div id="primo">
<?=$numero?>
</div>

</body>
</html>
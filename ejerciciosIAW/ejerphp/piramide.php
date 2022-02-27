<?php 

$numero=$_GET["numero"]

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide Numerica</title>
</head>
<body>
        

        <?php 
            for ($i=1; $i <= $numero; $i++){
                for($c=1; $c <= $i; $c++){
                    $a = $a + 1;
                if ($numero >= $a) {
                echo "<span"."> &nbsp; ".$a."</span>"; 
                }
            }
                echo "<br>";
            }
         ?>
</body>
</html>
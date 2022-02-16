<?php 
session_start();
$color = $_SESSION['color'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina1</title>
</head>
<body <?php if(isset($_SESSION)){  
        echo "style='background-color: $color'"?>  
    <?php }?> >
<ul>
<li><a href="./config.php">Ir a config.php</a></li>
<li><a href="./page2.php">Ir a page2.php</a></li>
</ul>
</body>
</html>
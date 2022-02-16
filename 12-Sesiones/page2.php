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
    <title>Document</title>
</head>
<body <?php if(isset($_SESSION)){  
        echo "style='background-color: $color'"?>  
    <?php }?> >
<ul>
    <h1>Pagina2</h1>
<li><a href="./config.php">Ir a config.php</a></li>
<li><a href="./page1.php">Ir a page1.php</a></li>
</ul>
</body>
</html>
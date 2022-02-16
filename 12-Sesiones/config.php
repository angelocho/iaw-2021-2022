<?php 
print_r($_POST);
session_start();
$color=$_SESSION['color'];
if (isset($_POST["enviar"])){
$color=$_POST["colorbox"];
$_SESSION['color'] = $color;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body <?php if(isset($_SESSION)){  
        echo "style='background-color: $color'"?>  
    <?php }?> >
<h1>Menu</h1>
    <ul> 
        <li><a href="./page1.php">Ir a page1.php</a></li>
        <li><a href="./page2.php">Ir a page2.php</a></li>
    </ul>
    <form action="config.php" method="POST" >
    <input type="color" name="colorbox" id="colorbox">
    <input type="submit" value="enviar" name="enviar">
    </form>

</body>
</html>
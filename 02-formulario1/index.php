<?php

#Utilizo una funcion que dice si hay una variable establecida y
#sacamos el valor del objeto
 #if(isset($_POST["enviar"])){
 #   echo "Se esta enviando info " - $_POST["nombre"];
#}else{
 #   echo "Bienvenido";

#}

$bienvenido=true;
$nombre="";
$apellidos='';
$edad='';
$edad_20_39='';
$edad_40_59='';
$edad_60_79='';

if(isset($_POST["Enviar"])){
    $bienvenido=false;
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    #$edad=$_POST["edad"];
    if(isset($_POST["edad"])){
        /*if($_POST["edad"]=="20-39"){
                $edad_20_39='checked';
        }elseif ($_POST["edad"]=="40-59"){
                $edad_40_59='checked';
        }elseif ($_POST["edad"]=="60-79"){
                $edad_60_79='checked';
        } */
        # If ternarios
        # $variable=(true)?'valorverdad':'valormentira';
      $edad_20_39=($_POST["edad"]=="20-39")?'checked':'';
      $edad_40_59=($_POST["edad"]=="40-59")?'checked':'';
      $edad_60_79=($_POST["edad"]=="60-79")?'checked':'';
    }
}

#echo "GET:<br>";
#print_r($_GET);
echo "POST:<br>";
print_r($_POST);
#echo "COOKIES:<br>";
#print_r($_COOKIES);
#echo "SESSION:<br>";
#print_r($_SESSION);
#echo "SERVER:<br>";
#print_r($_SERVER);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php if($bienvenido) { ?>
        <h1>Bienvenido!!!</h1>
    <?php } ?>
    <div>
        <form action="index.php" method="POST">    
<fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input name="nombre" id="nombre" type="text" tabindex="1" value="<?=$nombre?>"/>
                <label for="apellidos" >Apellidos:</label>
                <input name="apellidos" id="apellidos" type="text" tabindex="2" value="<?=$apellidos?>"/>
            </fieldset>

            <fieldset>
                <legend>Edad</legend>
            <!--    <label><input type="radio" tabindex="20" name="edad" value="20-39" <?php if($edad == "20-39"){echo "checked"; } ?>/> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="40-59" <?php if($edad == "40-59"){echo "checked"; } ?>/> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="60-79" <?php if($edad == "60-79"){echo "checked"; } ?>/> 60-79</label>-->
                <label><input type="radio" tabindex="20" name="edad" value="20-39" <?=$edad_20_39?>/> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="40-59" <?=$edad_40_59?>/> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="60-79" <?=$edad_60_79?>/> 60-79</label>
            
            </fieldset>

            <input type="submit" name="Enviar" value="Enviar">
        </form>
    </div>

</body>
</html>
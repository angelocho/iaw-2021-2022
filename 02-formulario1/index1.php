<?php

#Utilizo una funcion que dice si hay una variable establecida y
#sacamos el valor del objeto
 #if(isset($_POST["enviar"])){
 #   echo "Se esta enviando info " - $_POST["nombre"];
#}else{
 #   echo "Bienvenido";

#}

$nombre="";
$apellidos='';
$edad='';
$edad_20_39='';
$edad_40_59='';
$edad_60_79='';

$errores = false;
$error_nombre = false;
$error_apellido = false;
$error_edad= false;

   

if(isset($_POST["Enviar"])){

    $nombre = (isset($_POST["nombre"]))?$_POST["nombre"]:'';
    if(strlen($nombre) < 3){
        $error_nombre = true;
        $errores = true;
    }
    $apellidos = (isset($_POST["apellidos"]))?$_POST["apellidos"]:'';
    if(strlen($apellidos) < 3){
        $error_apellido = true;
        $errores = true;
    }
    $edad = (isset($_POST["edad"]))?$_POST["edad"]:'';
    if(strlen($edad) < 5){
        $error_edad = true;
        $errores = true;
    }

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
     /* $edad_20_39=($_POST["edad"]=="20_39")?'checked':'';
      $edad_40_59=($_POST["edad"]=="40_59")?'checked':'';
      $edad_60_79=($_POST["edad"]=="60_79")?'checked':'';
    */

    ${"edad_".$_POST["edad"]}='checked';
    
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
    <link rel="stylesheet" href="index1.css">
    <title>Formulario</title>
</head>
<body>
    <div>
        <?php
        if ($errores){ ?> 
        <div class="error">
        Los datos introducidos tienen errores <br>
            <?=($error_nombre)?'El nombre tiene que tener 3 caracteres o mas <br>':'';?>
            <?=($error_apellido)?'El apellido tiene que tener 3 caracteres o mas  <br>':'';?>
            <?=($error_edad)?'La edad no debe estar vacia  <br>':'';?>

        </div>
        <?php } ?>
        <form action="index1.php" method="POST">    
<fieldset>
                <legend>Información Personal</legend>
                <label <?=($error_nombre)?'class="error"':'';?> for="nombre">Nombre:</label>
                <input <?=($error_nombre)?'class="background-error"':'';?> name="nombre" id="nombre" type="text" tabindex="1" value="<?=$nombre?>"/>
                <label <?=($error_apellido)?'class="error"':'';?> for="apellidos" >Apellidos:</label>
                <input <?=($error_apellido)?'class="background-error"':'';?>name="apellidos" id="apellidos" type="text" tabindex="2" value="<?=$apellidos?>"/>
            </fieldset>

            <fieldset <?=($error_edad)?'class="background-error"':'';?>>
                <legend>Edad</legend>
            <!--    <label><input type="radio" tabindex="20" name="edad" value="20-39" <?php if($edad == "20-39"){echo "checked"; } ?>/> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="40-59" <?php if($edad == "40-59"){echo "checked"; } ?>/> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="60-79" <?php if($edad == "60-79"){echo "checked"; } ?>/> 60-79</label>-->
                <label><input type="radio" tabindex="20" name="edad" value="20_39" <?=$edad_20_39?>/> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="40_59" <?=$edad_40_59?>/> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="60_79" <?=$edad_60_79?>/> 60-79</label>
            
            </fieldset>

            <input type="submit" name="Enviar" value="Enviar">
        </form>
    </div>

</body>
</html>
<?php

$nombre="";
$apellidos='';
$edad='';
$fechanac='';
$precio=0;
$errores = false;
$error_nombre = false;
$error_apellido = false;
$error_fechanac = false;
$errorfechanacvacio=false;
$errorfechanacmenor=false;   
if(isset($_POST["Enviar"])){
    #echo "POST:<br>";
   # print_r($_POST);
    #echo "<br> <br> <br>";
    $nombre = (isset($_POST["nombre"]))?$_POST["nombre"]:'';
    if(strlen($nombre) < 3){
        $error_nombre = true;
        $errores = true;
    }elseif (preg_match($nombre,'/.*\d+.*/')) {
        $error_nombre= true;
        $errores = true;        
    }
    

    
    $apellidos = (isset($_POST["apellidos"]))?$_POST["apellidos"]:'';
    if(strlen($apellidos) < 3){
        $error_apellido = true;
        $errores = true;
    }
    
    $fechanac = (isset($_POST["fechanac"]))?$_POST["fechanac"]:'';
    $hoy = getdate();
    $anno = $hoy["year"];
    $diames = $hoy["mday"];
    $mes = $hoy["mon"] ;

    $hoybien = "$anno-$mes-$diames";
    $hacedieciocho = intval($anno-18)."-$mes-$diames";
  #  print_r($hacedieciocho);
   # echo "<br>"; 
   # print_r($_POST["fechanac"]);
    #echo $diff;
   # print_r($hoy);
    if(strlen($fechanac) < 2){
        $error_fechanac = true;
        $errores = true;
        $errorfechanacvacio=true;
    }elseif($hacedieciocho <= $fechanac){
        $errorfechanacmenor=true;
        $error_fechanac = true;
        $errores = true;
    }

    $email = (isset($_POST["email"]))?$_POST["email"]:'';
    if(strlen($email) < 2){
        $error_email = true;
        $errores = true;
    }
    
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $comment=$_POST["comment"];
    $email=$_POST["email"];
    $fechanac=$_POST["fechanac"];
    $numpanes=$_POST["numpanes"];
    if(isset($_POST["edad"])){
    ${"edad_".$_POST["edad"]}='checked';
    }

    if(isset($_POST["panes"])){
        if ($_POST["panes"] == 1){
            $panes="Chapata";
            $precio=0.5 * $numpanes;
        }elseif($_POST["panes"] == 2){
            $panes="Baguette";
            $precio=0.25 * $numpanes;
        }elseif($_POST["panes"] == 3){
            $panes="Hogaza";
            $precio=0.75 * $numpanes;
        }elseif($_POST["panes"] == 4){
            $panes="Centeno";
            $precio=1 * $numpanes;
        }elseif($_POST["panes"] == 5){
            $panes="Barra";
            $precio=0.5 * $numpanes;
        }elseif($_POST["panes"] == 6){
            $panes="Gallego";
            $precio=1.5 * $numpanes;
        }

    }
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Formulario Panaderia Miguel</title>
</head>
<body>
<h1 id="titulo">PANADERIAS MIGUEL</h1>
    <div id="contenido">
        <?php
        if ($errores){ ?> 
        <div class="error">
        Los datos introducidos tienen errores <br>
            <?=($error_nombre)?'El nombre tiene que tener 3 caracteres o mas <br>':'';?>
            <?=($error_apellido)?'El apellido tiene que tener 3 caracteres o mas  <br>':'';?>
            <?=($error_edad)?'La edad no debe estar vacia  <br>':'';?>
            <?=($errorfechanacvacio)?'La fecha de nacimiento no debe estar vacia  <br>':'';?>
            <?=($errorfechanacmenor)?'Debes ser mayor de 18 <br>':'';?>
            <?=($error_email)?'El email no debe estar vacío <br>':'';?>
        </div>
        <?php } ?>
        <form action="index.php" method="POST">    
            <fieldset class="colorfieldset">
                <legend>Información Personal</legend>
                <label <?=($error_nombre)?'class="error"':'';?> for="nombre">Nombre:</label>
                <input <?=($error_nombre)?'class="background-error"':'';?> name="nombre" id="nombre" type="text" tabindex="1" value="<?=$nombre?>"/>
                <label <?=($error_apellido)?'class="error"':'';?> for="apellidos" >Apellidos:</label>
                <input <?=($error_apellido)?'class="background-error"':'';?>name="apellidos" id="apellidos" type="text" tabindex="2" value="<?=$apellidos?>"/><br><br>
                
                <label <?=($error_email)?'class="error"':'';?> for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Introduce tu email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?=$email?>">
            </fieldset>

            <fieldset class="colorfieldset" <?=($error_edad)?'class="background-error"':'';?>>
                <legend>Edad</legend>
                
                <label <?=($error_fechanac)?'class="error"':'';?> for="fechanac">Fecha Nacimiento:</label>
                <input type="date" tabindex="3" name="fechanac" id="fechanac" value="<?=$fechanac?>"/> 
                <br><br><br>
               
            </fieldset>
            <fieldset class="colorfieldset">
                <legend>Pedido y comentarios</legend>
                <select name="panes">
                <option value="1" <?=$_POST["panes"] == 1?"selected":""?> >Chapata</option> 
                <option value="2" <?=$_POST["panes"] == 2?"selected":""?> >Baguette</option> 
                <option value="3" <?=$_POST["panes"] == 3?"selected":""?> >Hogaza</option>
                <option value="4" <?=$_POST["panes"] == 4?"selected":""?> >Centeno</option> 
                <option value="5" <?=$_POST["panes"] == 5?"selected":""?> >Barra</option> 
                <option value="6" <?=$_POST["panes"] == 6?"selected":""?> >Gallego</option>
                </select>
                <input type="number" name="numpanes" id="numpanes" min="1" max="20" value="<?=$numpanes?>">
                <br><br><br>
            Comentario: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
            <div class="etiquetas">
                          <input type="checkbox" name="info_mail" checked> Recibir correo.
                          <input type="checkbox" name="info_sms"> Avisos urgentes  
            </div>
            <?php
        if(isset($_POST["Enviar"])) { ?> 
                <h3>Resumen pedido</h3>
                        <table>
                                <tr>
                                      <td>PRODUCTO</td>
                                      <td>NOMBRE</td>
                                      <td>CANTIDAD</td>
                                      <td>PRECIO TOTAL</td>
                                </tr>
                                 <tr>
                                      <td><?php  echo rand(0,9000); ?></td>
                                      <td><?=$panes?></td>
                                      <td><?=$numpanes?></td>
                                      <td><?=$precio?></td>
                                </tr> 
                          </table>
                        <?php } ?>
            <input type="submit" name="Enviar" value="Enviar">
            <input type="reset" name="Reset" value="Reset">

            
            </fieldset>
        </form>
    </div>

</body>
</html>
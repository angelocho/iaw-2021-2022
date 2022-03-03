<?php 
include('accesoadatos.php');

$datos = $conexion_bd->query('SELECT * FROM clientes ORDER BY edad DESC');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Ordenar</title>
</head>
<body>
<div id="content">
        <h1>Listado de personas</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $fila) { ?>
                <tr>
                    <td><a href="detalle.php?nom=<?=$fila['nom']?>">
                    <?=$fila['nom']?></a>
                    
                </td>
                    <td>
                        
                        <?=$fila['ape']?>
                    </td>
                    
                    <?php 
                        if ($fila['edad'] >= 18){
                           echo " <td>".$fila['edad']."<img src='./mayor18.png'></td>";
                        }else{
                            echo " <td>".$fila['edad']."<img src='./menor18.png'></td>"; 
                        }
                    
                    ?>
                 

                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
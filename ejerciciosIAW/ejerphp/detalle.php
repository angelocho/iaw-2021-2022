<?php 
include('accesoadatos.php');

$select = $conexion_bd->prepare("SELECT * FROM clientes WHERE nom = :nom;");
$row = $select->fetch($select->execute(array(':nom' => $_GET['nom'])));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Detalle</title>
</head>
<body>
<table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Gustos musicales</th>
                </tr>
            </thead>
            <tbody>
              
                <tr>
                    <td>
                    <?=$row['nom']?>
                    </td>
                </td>
                    <td>
                        
                        <?=$row['ape']?>
                    </td>
                    
                    <?php 
                        if ($row['edad'] >= 18){
                           echo " <td>".$row['edad']."<img src='./mayor18.png'></td>";
                        }else{
                            echo " <td>".$row['edad']."<img src='./menor18.png'></td>"; 
                        }
                    
                    ?>
                 <td><?=$row['gustosmusicales']?></td>

                </tr>
                
            </tbody>
        </table>
</body>
</html>
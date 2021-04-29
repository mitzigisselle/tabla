<?php
    $conexion=mysqli_connect("localhost","root","","crupoo");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos </title>
</head>
<body>
    <br>

    <table>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido</td>
        </tr>
        <?php
        $sql="SELECT * FROM t_persona";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){

        ?>

        <tr>
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['apellido'] ?></td>
        </tr>
        <?php

        }
        ?>
    </table>
    
</body>
</html>
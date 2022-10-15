<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <?php
    $buscar = $_POST['buscar']??'';
    print_r($_POST);
    ?>
    <div> 
        <form action="" method="post">
        <input type="text" name="buscar" id="" value="<?=$buscar?>">       
        <input type="submit" value="Buscar">
        <a href="nuevo.php">Nuevo</a>
        </form>
    </div>
    <br>
    <div>
        <table border="1"> 
            <tr>
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>OPCIONES</th>
            </tr>   
            <?php 
            
            $cnx = mysqli_connect("localhost", "root", "","dbprueba");
            $sql = "SELECT id, nom, ape FROM talumno where nom like '$buscar' '%' or ape like '$buscar' '%' order by id desc";
            $rta = mysqli_query($cnx,$sql);
            while ($mostrar = mysqli_fetch_row($rta)) {
            ?>
            <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td>
                    <a href="editar.php?
                    id=<?php echo $mostrar['0'] ?> &
                    nom=<?php echo $mostrar['1'] ?> &
                    ape=<?php echo $mostrar['2'] ?>
                    ">Editar</a>
                    <a href="sp_eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php
            }
            ?>

        </table>
    </div>
</body>
</html>
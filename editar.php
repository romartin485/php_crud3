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
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $ape =$_GET['ape'];
    ?>
    <div>
    <br>
    <form action="sp_editar.php" method="post">
    <table border = 1>
        <tr>
            <td>Ingresar Datos:</td>
            <td><input type="text" name="id" id="" style="visibility:hidden" value="<?=$id?>"></td>
        </tr>
        <tr>
            <td>NOMBRES:</td>
            <td><input type="text" name="nom" id="" value="<?=$nom?>"></td>
        </tr>   
        <tr>
            <td>APELLIDOS:</td>
            <td><input type="text" name="ape" id="" value="<?=$ape?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Actualizar"></td>
            <td><a href="index.php">Cancelar</a></td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>
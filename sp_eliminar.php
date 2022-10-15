<?php 
$id = $_GET['id'];

$cnx = mysqli_connect("localhost", "root", "","dbprueba");
$sql = "DELETE FROM talumno where id like $id";
$rta = mysqli_query($cnx, $sql);
if (!$rta) {
    echo "No se Elimino!";
}
else {
    header("Location: index.php");
}   
?>
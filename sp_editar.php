<?php 
$id = $_POST['id'];
$nom = $_POST['nom'];
$ape =$_POST['ape'];

$cnx = mysqli_connect("localhost", "root", "","dbprueba");
$sql = "UPDATE talumno set nom='$nom', ape='$ape' where id like $id";
$rta = mysqli_query($cnx, $sql);
if (!$rta) {
    echo "No se Actualizo!";
}
else {
    header("Location: index.php");
}   
?>
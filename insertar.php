<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];

$sql="INSERT INTO ususarios VALUES('$id', '$nombre', '$email')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
}
else{

}
?>
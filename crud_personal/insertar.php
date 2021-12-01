<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$edad=$_POST['edad'];
$ocupacion=$_POST['ocupacion'];
$email=$_POST['email'];

$sql="INSERT INTO personal VALUES('$id', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$ocupacion', '$email')"; 
$query= mysqli_query($con,$sql);

if($query){
    Header("location: personal.php");
}else {
    echo "hay un problema";
}
?>
<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$edad=$_POST['edad'];

$sql="INSERT INTO guardias VALUES('$id', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: guardias.php");
}else {
    echo "hay un problema";
}
?>
<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$edad=$_POST['edad'];
$puesto=$_POST['puesto'];
$experiencia=$_POST['experiencia'];

$sql="INSERT INTO policias VALUES('$id', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$puesto', '$experiencia')"; 
$query= mysqli_query($con,$sql);

if($query){
    Header("location: policias.php");
}else {
    echo "hay un problema";
}
?>
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

$sql="UPDATE personal SET  nombre='$nombre',apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno',edad='$edad',ocupacion='$ocupacion',email='$email' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>
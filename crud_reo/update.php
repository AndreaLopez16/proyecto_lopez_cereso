<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$edad=$_POST['edad'];
$motivo=$_POST['motivo'];
$curp=$_POST['curp'];

$sql="UPDATE reo SET  nombre='$nombre',apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno',edad='$edad',motivo='$motivo',curp='$curp' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: reo.php");
    }
?>
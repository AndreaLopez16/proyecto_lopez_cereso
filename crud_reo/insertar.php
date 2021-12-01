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

$sql="INSERT INTO reo VALUES('$id', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$motivo', '$curp')"; 
$query= mysqli_query($con,$sql);

if($query){
    Header("location: reo.php");
}else {
    echo "hay un problema";
}
?>
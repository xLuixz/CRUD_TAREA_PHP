<?php
include('conexion.php');
$con = conexion();

$id = $_POST['id'];
$usuario = $_POST['user'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];

$sql = "UPDATE usuarios SET user='$usuario', email='$correo', telefono='$telefono', pais='$pais' WHERE id='$id'";
$query = mysqli_query($con,$sql);

if($query){
    header("Location: index.php");
};
?>

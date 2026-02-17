<?php
include('conexion.php');
$con = conexion();

$id = null;
$usuario = $_POST['user'];
$clave = $_POST['pass'];

$sql = "INSERT INTO usuarios VALUES('$id','$usuario','$clave')";
$query = mysqli_query($con,$sql);

if($query){
    header("Location: index.php");
};

?>
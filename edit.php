<?php
include('conexion.php');
$con = conexion();

$id = $_POST['id'];
$usuario = $_POST['user'];
$clave = $_POST['pass'];

$sql = "UPDATE usuarios SET user='$usuario', pass='$clave' WHERE id='$id'";
$query = mysqli_query($con,$sql);

if($query){
    header("Location: index.php");
};

?>
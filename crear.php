<?php
    include('conexion.php');
    $con = conexion();

    $usuario = $_POST['user'];
    $correo = $_POST['email'];
    $telefono = $_POST['telefono'];
    $pais = $_POST['pais'];

    $sql = "INSERT INTO usuarios VALUES('$id','$usuario','$correo','$telefono','$pais')";
    $query = mysqli_query($con,$sql);

    if($query){
        header("Location: index.php");
    };
?>

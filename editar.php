<?php
include('conexion.php');
$con = conexion();

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id='$id'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="edit.php" method="POST">
            <h1>EDITAR USUARIO</h1>
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="user" placeholder="NUEVO USUARIO" value="<?= $row['user']?>">
            <input type="password" name="pass" placeholder="NUEVA CONTRASEÑA" value="<?= $row['pass']?>">

            <input type="submit" value="EDITAR USUARIO">
        </form>
    </div>
</body>
</html>
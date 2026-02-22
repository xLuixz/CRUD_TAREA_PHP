<?php
include('conexion.php');
$con = conexion();

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
                        <h3>EDITAR USUARIO</h3>
                        <form action="edit.php" method="POST" class="border p-4">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nombre de Usuario</label>
                                <input type="text" name="user" class="form-control" placeholder="Nuevo Nombre" value="<?= $row['user'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Correo Electrónico</label>
                                <input type="email" name="email" class="form-control" placeholder="Nuevo Correo" value="<?= $row['email'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Teléfono</label>
                                <input type="text" name="telefono" class="form-control" placeholder="Nuevo Numero de Teléfono" value="<?= $row['telefono'] ?>" maxlength="9" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Pais de Origen</label>
                                <input type="text" name="pais" class="form-control" placeholder="Pais de Origen" value="<?= $row['pais'] ?>" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">GUARDAR CAMBIOS</button>
                                <a href="index.php" class="btn btn-danger">CANCELAR</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

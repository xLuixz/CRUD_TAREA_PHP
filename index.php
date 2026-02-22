<?php
    include('conexion.php');

    $con = conexion();
    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1{
            text-align:center;
            font-size: 60px;
            margin-top: 10px;

        }
    </style>
</head>
<body>
    <h1>CRUD</h1>
    <div class="container mt-5">
        <form action="crear.php" method="POST" class="border p-4">
            <h2>Crear Usuario</h2>
            <div class="mb-3">
                <input type="text" name="user" class="form-control" placeholder="Ingrese Nombre de Usuario" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Ingrese Correo Electrónico" required>
            </div>
            <div class="mb-3">
                <input type="text" name="telefono" class="form-control" placeholder="Ingrese Número Celular" maxlength="9" required >
            </div>
            <div class="mb-3">
                <input type="text" name="pais" class="form-control" placeholder="Ingrese Pais de Origen" required>
            </div>
            <div class="text-center">
                <input type="submit" value="AGREGAR" class="btn btn-success">
            </div>
        </form>
    </div>
    <br>
    <hr>
    <div class="container mt-5">
        <h2>USUARIOS REGISTRADOS</h2>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>País</th>
                    <th style="text-align:center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['user'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['telefono'] ?></td>
                    <td><?= $row['pais'] ?></td>
                    <td>
                        <div class="text-center">
                            <a href="editar.php?id=<?= $row['id']?>" class="btn btn-info btn-sm">EDITAR</a>
                            <a href="eliminar.php?id=<?= $row['id']?>" class="btn btn-danger btn-sm">ELIMINAR</a>
                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>    
    </div>
</body>
</html>

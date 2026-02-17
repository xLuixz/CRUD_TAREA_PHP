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
        <title>CRUD</title>
    </head>
    <body>
        <div>
            <form action="crear.php" method="POST">
            <h1>CREAR USUARIO</h1>
            <input type="text" name="user" placeholder="INGRESE NUEVO USUARIO">
            <input type="password" name="pass" placeholder="INGRESE CONTRASEÑA">

            <input type="submit" value="AGREGAR USUARIO">
            </form>
        </div>

        <div>
            <h2>USUARIO REGISTRADO</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>USUARIO</th>
                        <th>CONTRASEÑA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['user'] ?></td>
                        <td><?= $row['pass'] ?></td>
                        <td><a href="editar.php?id=<?= $row['id']?>">EDITAR</a></td>
                        <td><a href="eliminar.php?id=<?= $row['id']?>">ELIMINAR</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
        
            </table>    
        
        </div>
    </body>
    </html>


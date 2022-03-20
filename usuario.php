<?php
include("conexion.php");
$con=conectar();
 
$sql="SELECT*FROM ususarios";
$query=mysqli_query($con,$sql);
 
$row=mysqli_fetch_array($query);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet">
    <title>Pagina Usuario</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col md-3" id="col1">
                <h1>DATOS</h1><br>
                <form action="insertar.php" method="POST">
                    <input type="text" name="id" placeholder="Cedula"><br><br>
                    <input type="text" name="nombre" placeholder="Nombre"><br><br>
                    <input type="text" name="email" placeholder="Correo electronico"><br><br>
 
                    <input type="submit">
                </form>
 
            </div>
 
            <div class="col md-8" id="tabla_usuarios">
                <h1>LISTA DE USUARIOS</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Correo electronico<th>
                        </tr>
                    </thead>
 
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php echo $row['id']?></th>
                                <th><?php echo $row['nombre']?></th>
                                <th><?php echo $row['email']?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                            
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>


<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM ususarios WHERE id='$id'";
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
    <title>Actualizar</title>
</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
            
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
        <input type="text" name="email" placeholder="Email" value="<?php echo $row['email'] ?>">

        <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
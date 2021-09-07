<?php 
    include("conexionANO.php");
    $con=conectar();

$id_ano_acad=$_GET['id_ano_acad'];

$sql="SELECT * FROM ano_academico WHERE id_ano_acad='$id_ano_acad'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Año Academico</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">

                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Actualizar</h1>
                <form action="updateANO.php" method="POST">

<label for="id_ano_acad">ID</label>
<input type="text" class="form-control mb-3" name="id_ano_acad" value="<?php echo $row['id_ano_acad']  ?>">

<label for="nom_ano_acad">AÑO</label>
    <input type="text" class="form-control mb-3" name="nom_ano_acad" id="nom_ano_acad"  value="<?php echo $row['nom_ano_acad']  ?>">

                               

                            <input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Actualizar>
                    </form>
                    <th><label for="busqueda"></label><br><a href="ano_academico.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
                    </div>
    </body>
</html>
                    
                        
</html>
<?php 
    include_once("Conectar.php");

    $id=$_GET['id'];
    //$cone= mysqli_connect("localhost","root","","universidad");
    $sql="SELECT * FROM product WHERE id='$id'";

    $query=mysqli_query($micon->conexion,$sql);
    $row=mysqli_fetch_array($query);
   ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <h1 style='text-shadow: 5px 2px 3px indianred; font-family: Felix Titling'>ACTUALIZAR  DATOS </h1>
                        </div>
                        <div class="col-sm-12 col-md-8  p-3 mb-2 p-3 mb-2 bg-info text-dar">
                            <form action="update.php" method="POST">

                                <h3>id</h3>
                                <input type="text" class="form-control mb-3"  name="id" placeholder="id"value="<?php echo $row['0']  ?>" > 
   >
                                 <h3>name</h3>
                                <input type="text" class="form-control mb-3" name="name" placeholder="name" value="<?php echo $row['1']  ?>">

                                <h3> code</h3>
                                <input type="text" class="form-control mb-3" name="code" placeholder="code" value="<?php echo $row['2']  ?>">
                                 
                                <h3> image</h3>
                                <input type="text" class="form-control mb-3" name="image" placeholder="image" value="<?php echo $row['3']  ?>">
                                 
                                <h3> price</h3>
                                <input type="text" class="form-control mb-3" name="price" placeholder="price" value="<?php echo $row['4']  ?>">
                                 
                                <
                                 
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                           </form>
                             
                        </div>
                   </div>
                                                       
             </div>
    </body>
</html>
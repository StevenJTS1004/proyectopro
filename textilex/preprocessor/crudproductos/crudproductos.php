<?php 
    include_once("Conectar.php");

    $sql="SELECT *  FROM product";
    $query=mysqli_query($micon->conexion,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA  USUARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    </head>
    <body bgcolor="cyan">
       <!--Inicio Navbar-->
       <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-white" href="#page-top">BASE DE DATOS</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white" href="javascript:history.back();">Ingresar a la base de datos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white" href="../../index.html#about">Publicidad Huerta</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white" href="../../index.html#contact">Contactanos</a></li>
            </ul>
        </div>
    </div>
</nav>

        <!--Fin Navbar-->

            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-4  p-3 mb-2 p-3 mb-2 bg-info text-dar " >
                            <h1 style='text-shadow: 5px 2px 3px indianred; font-family: Felix Titling'>INGRESE LOS  DATOS </h1>
                                    <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="name" placeholder="name">
                                    <input type="text" class="form-control mb-3" name="code" placeholder="code">
                                    <input type="text" class="form-control mb-3" name="image" placeholder="image">
                                    <input type="text" class="form-control mb-3" name="price" placeholder="price">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8  ">
                            <table class="table" >
                                <thead class="table-success table-striped table-primary" >
                                    <tr>
                                        <th>id</th>
                                        <th>name </th>
                                        <th>code</th>
                                        <th>image</th>
                                        <th>price</th>
                                       
                                    </tr>
                                </thead>

                                <tbody class="table-striped table-primary">
                                        <?php
                                            
                                                                                                                                                                 
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['0']?></th>
                                                <th><?php  echo $row['1']?></th>
                                                <th><?php  echo $row['2']?></th>
                                                <th><?php  echo $row['3']?></th>
                                                <th><?php  echo $row['4']?></th>
                                                

                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
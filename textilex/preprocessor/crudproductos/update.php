<?php
include_once("Conectar.php");

echo $id=$_POST['id'];
echo $name=$_POST['name'];
echo $code=$_POST['code'];
echo $image=$_POST['image'];
echo $price	=$_POST['price'];

$sql="UPDATE product  SET  id='$id', name='$name', code='$code',image='$image',price='$price' WHERE id='$id'";
$query= mysqli_query($micon->conexion,$sql);

if($query)
   {
    header("Location:crudproductos.php");
    }

?>
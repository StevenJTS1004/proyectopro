<?php
include_once("Conectar.php");


$id=$_POST['id'];
$name	=$_POST['name'];
$code=$_POST['code'];
$image=$_POST['image'];
$price=$_POST['price'];

$sql="INSERT INTO product  VALUES('$id','$name','$code','$image','$price')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:crudproductos.php");
 }
else 
{
    //
}
?>
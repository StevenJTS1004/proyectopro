<?php
  class Conectar
   {
    private  $hostname="localhost";
    private  $username="root";
    private  $password="";
    public  $bdname="textilexbase";
    public   $conexion;
    public function __construct()
     {
     	$this->conexion = new mysqli($this->hostname,$this->username,$this->password,$this->bdname) or
     	die(mysql_error());
     	$this->conexion->set_charset("utf8");

     	if($this->conexion)
     	   {
     		echo" CONEXION HA  SIDO  EXITOSA".PHP_EOL;
  		   }
 	   }
   
   }
    $micon= new Conectar();
 ?>

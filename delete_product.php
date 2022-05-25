<?php
require "CRUDProduit.php";
$crud=new CRUDProduit();
$id=$_GET["id"];
$res=$crud->delete($id);

if($res){
echo "suppression effectuée";
header('location:Products.html.php');}
else
 echo "pb de suppression!!!!!";
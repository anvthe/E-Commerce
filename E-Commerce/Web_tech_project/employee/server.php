<?php
error_reporting(0);
session_start();

$Product_name = "";
$Product_Id    = "";
$errors = array();
$sucess= array();
$db = mysqli_connect('localhost', 'root', '', 'webtech');

if (isset($_POST['addp'])) {
    
  $Product_name = mysqli_real_escape_string($db, $_POST['Product_name']);
  $Product_Id = mysqli_real_escape_string($db, $_POST['Product_Id']);
  $Product_Price = mysqli_real_escape_string($db, $_POST['Product_Price']);
  $Brand = mysqli_real_escape_string($db, $_POST['Brand']);
    
  if (empty($Product_name)) { array_push($errors, "Product name is required"); }
  if (empty($Product_Id)) { array_push($errors, "Product Id is required"); }
  if (empty($Product_Price)) { array_push($errors, "Product price is required"); }
  if (empty($Brand)) { array_push($errors, "Brand is required"); }
  
  if ($product) { // if product exists
   

    if ($product['Product_Id'] === $Product_Id) {
      array_push($errors, "Product_Id already exists");
    }
  }


    if (count($errors) == 0) {
  
  	$query = "INSERT INTO product (Product_name, Product_Id, Product_price,Brand) 
  			  VALUES('$Product_name', '$Product_Id', '$Product_Price','$Brand')";
       if( mysqli_query($db, $query)){array_push($sucess, "Product updated"); }
  	header('location: productupdate.php');
  }
}
?>
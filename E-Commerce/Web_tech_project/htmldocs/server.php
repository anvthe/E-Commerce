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
  $Net_Weight = mysqli_real_escape_string($db, $_POST['Net_Weight']);
  $Product_Buying_Price = mysqli_real_escape_string($db, $_POST['Product_Buying_Price']);
  $Product_Selling_Price = mysqli_real_escape_string($db, $_POST['Product_Selling_Price']);
    

  $Brand_Name = mysqli_real_escape_string($db, $_POST['Brand_Name']);
  $Quantity = mysqli_real_escape_string($db, $_POST['Quantity']);
  $Buying_Date = mysqli_real_escape_string($db, $_POST['Buying_Date']);
  $Supplier_Name = mysqli_real_escape_string($db, $_POST['Supplier_Name']);




  $Supplier_Address = mysqli_real_escape_string($db, $_POST['Supplier_Address']);
  $Supplier_Phone_Number = mysqli_real_escape_string($db, $_POST['Supplier_Phone_Number']);
  //$fileToUpload = mysqli_real_escape_string($db, $_POST['fileToUpload']);




     $avatar_path = 'image/'.$_FILES['avatar']['name'];
     $avatar=$_FILES['avatar']['name'];

    preg_match("!image!",$_FILES['avatar']['type']);
    copy($_FILES['avatar']['tmp_name'], $avatar_path);

    

         

$brand_id="1";

  if ($product) { 

    if ($product['Product_Id'] === $Product_Id) {
      array_push($errors, "Product_Id already exists");
    }
  }


    if (count($errors) == 0) {
      $category=$_POST['category'];
      $query1="SELECT category_id FROM category where category_name='$category'";
      $run_query1= mysqli_query($db, $query1);
      $row=mysqli_fetch_array ($run_query1);
        $category_id=$row['category_id'];


    	$query = "INSERT INTO product (product_id, product_name, product_image,buy_price,sell_price,net_weight,category_id,brand_id,status)" 
  			       ."VALUES(Null,'$Product_name', '$avatar','$Product_Buying_Price','$Product_Selling_Price','$Net_Weight', '$category_id',
               '$brand_id','$Quantity')";



      $query2 = "INSERT INTO supplier (supplier_id, supplier_name, supplier_address,supplier_phone)" 
               ."VALUES(Null,'$Supplier_Name',' $Supplier_Address',' $Supplier_Phone_Number')";






       if( mysqli_query($db, $query)){array_push($sucess, "Product updated"); }
       if( mysqli_query($db, $query2)){array_push($sucess, "Product updated"); }

        $query1="SELECT * FROM product where product_name='$Product_name' AND buy_price='$Product_Buying_Price'";


       $result= mysqli_query($db, $query1); 
        $roe=mysqli_fetch_array($result);
        $pid=$roe['product_id'];



        $query11="INSERT INTO product_lot (lot_id,product_id,price)" 
               ."VALUES(Null,'$pid','$Product_Buying_Price')";

       $result= mysqli_query($db, $query11); 

       




                	header('location: productupdate.php');
    







    

    }
  
}
?>
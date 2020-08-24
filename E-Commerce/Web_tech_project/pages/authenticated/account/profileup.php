<?php

error_reporting(0);  
   
session_start();
echo "php";
echo $_SESSION['admin_id'];
 $mysqli = new mysqli("localhost", "root", "", "webtech");

 $sql= "SELECT name ,email, gender,date_of_birth FROM admin WHERE admin_id='".$_SESSION['admin_id']."';";
 
$result=$mysqli->query($sql) ;
 if($result->num_rows > 0){
    echo "query";

    while($row = $result->fetch_assoc()){
        $_SESSION['name']=$row["name"];
        $_SESSION['email']=$row["email"];
        $_SESSION['gender']=$row["gender"];
        $_SESSION['date_of_birth']=$row["date_of_birth"];
        
        header("Location:edit_profile.php");

    }
 }


?>



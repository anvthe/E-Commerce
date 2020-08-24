<?php

session_start();

?>

<?php
    if (isset($_POST['submit'])) {
    if(isset($_POST['gender']))
    {
      $_SESSION['gender']=$_POST['gender'] ;
    }
}
?>

<?php

error_reporting(0); 
   

    $name =$_POST['name'];
    $email =$_POST['email'];
    
    $date_of_birth =$_POST['dob'];


    $mysqli = new mysqli("localhost", "root", "", "webtech");


    $gender= $_SESSION['gender'];
    $sql= "UPDATE  admin SET name='$name' , email='$email', gender='$gender',date_of_birth= '$date_of_birth' where admin_id='".$_SESSION['admin_id']."';";
 
 if($mysqli->query($sql)){
    
    header("Location:edit_profile.php");
    $_SESSION['name']=$_POST['name'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['gender']=$_POST['gender'];
    $_SESSION['date_of_birth']=$_POST['dob'];

    while($row = $result->fetch_assoc()){
        $_SESSION['name']=$row["name"];
        $_SESSION['email']=$row["email"];
        $_SESSION['gender']=$row["gender"];
        $_SESSION['date_of_birth']=$row["date_of_birth"];
        
        

    }



 }


?>



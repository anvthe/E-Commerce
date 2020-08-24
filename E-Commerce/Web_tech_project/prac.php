<?php
session_start();
?>



<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","webtech");

if(!$con){
die("Connection Error: ".mysqli_connect_error());



}
else{

	$str="select * from login where username='".$_POST['uname']."' and password='".$_POST['pass']."';";
	$result=mysqli_query($con,$str);

    
    
    
    
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_array($result);
		$_SESSION['usrnm']=$row['username'];
        
        if($row['user_type']=='user')
        {
            header("Location:htmldocs\indexuser.html");
        }
         if($row['user_type']=='admin')
        {
            header("LOcation:pages\authenticated\index.php");
        }
		
}

}


?>
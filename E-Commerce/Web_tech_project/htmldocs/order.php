<style type="text/css">
th {
   background-color: blue;
   color: white;
    }

#td1{
	background-color: black;
   color: white;
}    


  
</style>


<?php
	include "db.php";
    
    session_start();

if(isset($_POST['submit'])){
    $uid=$_SESSION["customer_id"];

 	$sql= "SELECT * FROM cart WHERE customer_id='$uid'";
	$run_query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($run_query);
	if($count<1)
	{
		header("Location:profile.php");

	}

}
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
	<table width="100%" cellspacing="15" border="12" cellpadding="15" >

		<tr>
			<th>CONFIRMATION PAGE</th>
		</tr>	
	</table>
	<br/>
	<br/>
	<br/>

	<table width="60%" cellspacing="0" border="2" cellpadding="15" align="center">
		

			<tr >
				<td id="td1">TOTAL PRICE <td id="td1"> <?php  echo $_SESSION['totl']; ?> &nbsp BDT</td> </td> 
			</tr>

			<tr >
				<td id="td1"> NAME </td>  <td id="td1">
				<?php
   					 $con=mysqli_connect("localhost","root","","webtech");
   					   $strg="SELECT name FROM user WHERE customer_id='".$_SESSION['customer_id']."';";
   					     $results=mysqli_query($con,$strg);
                        if(mysqli_num_rows($results)>0)
                        {
                         $row2=mysqli_fetch_array($results);

                        	echo $row2['name'];
                        }
				?> </td>  
			</tr>

			<tr >
				<td id="td1"> PHONE NUMBER</td> <td id="td1"> 
						<?php
   					 $con=mysqli_connect("localhost","root","","webtech");
   					   $strg="SELECT phone FROM user WHERE customer_id='".$_SESSION['customer_id']."';";
   					     $results=mysqli_query($con,$strg);
                        if(mysqli_num_rows($results)>0)
                        {
                         $row2=mysqli_fetch_array($results);
                         	$_SESSION['phone']=$row2['phone'];
                        	echo $row2['phone'];
                        }
                        ?>
				</td> 
			</tr>

			<tr >
				<td id="td1"> ADDRESS </td><td id="td1"> <textarea name="address" required="" ></textarea> 
				</td> 
			</tr>



	</table>
    </br>
  
    


	<table width="60%" cellspacing="0" border="0" cellpadding="15" align="center">
		
		<tr>
		<td><b>ARE YOU REALLY WANT TO BUY ?</b></td> 
	   </tr>
       
       <tr>
	   <td>
			<input type="image" src="confirm.jpg" name="submit" value="check out" width="100px" height="100px" formaction="confirm.php" align="center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
			<a href="profile.php">BACK</a>
		</td>	

		


	</table>	



</form>
</body>
</html>








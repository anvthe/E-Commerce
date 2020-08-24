<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$error="";
$success="";
(bool)$flag=false;
	if(isset($_POST['submit']))
	{
		
		if($uname=="admin")
		{
			if($pass=="password")
			{
				$error="";
				$success="welcome Admin!!!!!";
				echo $success;
				$flag=true;
			}
			else
			{
				$error="Login Invalid";
				$success="";
				echo $error;
				$flag=false;
			}
		}
		else
		{
			
				$error="Login Invalid";
				$success="";
				echo $error;
				$flag=true;
			
			
		}
		
	}


if(	$flag==true){
	header("Location: Web_tech_project/htmldocs/homepage.html");
	
}







?>
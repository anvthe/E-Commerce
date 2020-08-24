<?php


session_start();
if(isset($_REQUEST['update'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id=$_SESSION['admin_id'];
$sql = "SELECT * FROM admin where admin_id='$id'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);

echo "Please type the correct password";
	if(($_POST['curpass'])==($row['password'])){
				echo 'password must be same';

		if($_POST['newpass1']==$_POST['newpass2']){

			$new=$_POST['newpass1'];
			$sql2="UPDATE admin set password='$new' where admin_id='$id'";

			mysqli_query($conn,$sql2);
			$name=$_SESSION['usrnm'];
			$sql3="UPDATE login set password='$new' where username='$name'";

			mysqli_query($conn,$sql3);
			header("Location:change_password.html");
			}
		}
	}
}



?>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";

$id=$_GET['id'];
$val='0';
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM notice WHERE notice_id='$id';";

if(mysqli_query($conn, $sql)){
	header("Location:deletenotice.php");
}



?>
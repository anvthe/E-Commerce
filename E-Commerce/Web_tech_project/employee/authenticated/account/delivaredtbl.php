<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET['id'];

$eid=$_SESSION['employee_id'];

$sql = "UPDATE order_tbl set status='delivared' where order_id='$id'";
if(mysqli_query($conn, $sql)){

header("Location:productdel.php");


}


?>

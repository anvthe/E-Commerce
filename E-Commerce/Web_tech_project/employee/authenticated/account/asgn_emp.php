<?php

session_start();
if(isset($_REQUEST['submit'])){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "webtech";
			$empname=$_POST['Employee_Name'];
			$order=$_POST['Order_Id'];
			$uid=$_SESSION['customer_id'];
			$status='On Process';
			$price=$_SESSION['totl'];
			$payment_method='cash on delivary';
			$address=$_SESSION['address'];
			$phone=$_SESSION['phone'];
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			$sql="SELECT * FROM employee where name='$empname'";
			$res=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($res);
			$empid=$row['employee_id'];
			$query="INSERT INTO work_assign (order_id,c_address,employee_name,employee_id,c_phone,price,delivary_number) "."VALUES('$order','$address','$empname','$empid','$phone','$price',NULL)";
			   $result= mysqli_query($conn, $query);
			$sql2="UPDATE order_tbl set status='$status' where order_id='$order'";
			mysqli_query($conn,$sql2);


}

?>
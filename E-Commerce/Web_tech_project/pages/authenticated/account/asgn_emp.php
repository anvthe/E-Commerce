<?php

session_start();
if(isset($_REQUEST['submit'])){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "webtech";
			$order=$_POST['Order_Id'];
			
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			$sql2="SELECT * FROM order_tbl where order_id='$order'";
			$res2=mysqli_query($conn,$sql2);
			$row2=mysqli_fetch_array($res2);


			$empname=$_POST['Employee_Name'];
			//$order=$row2['Order_Id'];
			$uid=$row2['user_id'];
			$status='On Process';
			$price=$row2['price'];
			$payment_method='cash on delivary';
			$address=$row2['address'];
			$phone=$row2['phone'];
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
<?php


   $con=mysqli_connect("localhost","root","","webtech");
 
   $sql="SELECT user_id, SUM(price)  FROM order_tbl GROUP BY user_id";
  
   $result=mysqli_query($con,$sql);

   $rows=array();
   
   while ($row=mysqli_fetch_array($result)) {
   	$rows[]=$row;
   	foreach ($rows as $row) {
   		$uid=$row['user_id'];
   		if((($row['SUM(price)'])>'20000') and (($row['SUM(price)'])<'40000')){
   			$sql2="INSERT INTO special_tbl(user_id,status)"."VALUES('$uid','star')";
   			mysqli_query($con,$sql2);
   		}

   		if(($row['SUM(price)'])>'40000'){
   			$sql3="INSERT INTO special_tbl(user_id,status)"."VALUES('$uid','premium')";
   			mysqli_query($con,$sql3);
   		}
   		if(($row['SUM(price)'])<='20000'){
   			$sql4="INSERT INTO special_tbl(user_id,status)"."VALUES('$uid','regular')";
   			mysqli_query($con,$sql4);
   		}
   		


   	}
   }

 




?>


<form>
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #00167a;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #00167a;
   color: white;
    }
  tr:nth-child(even) {background-color: #858ac4}
 </style>

<fieldset>
    <legend>
        <b>Notice | List</b>
        </legend>
    
<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="left">User Id </th>
        <th align="left">User Type</th>
        
       
    </tr>

 <?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'webtech');
   

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT user_id,status FROM special_tbl";
    $result = $conn->query($sql);
    if ($result -> num_rows > 0) {
   

    while($row = $result->fetch_assoc()) {
    	$uid=$row['user_id'];
    	$sql2="SELECT * FROM user WHERE customer_id='$uid'";
    	$res=mysqli_query($con,$sql2);
    	$row2=mysqli_fetch_array($res);
    echo "<tr><td>".$row2["name"]."</td><td>".$row["status"]."</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
?>

</table>

    
   

</fieldset>
</form>




